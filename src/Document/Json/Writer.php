<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Json;

use SimpleStorageSystem\Document\Exception\UnableSaveFile;
use SimpleStorageSystem\Utilities\Explorer;

class Writer implements WriterInterface
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function write(array $context): void
    {
        if (!is_file($this->filename)) {
            Explorer::createFileIfNotExists($this->filename);
        }

        $file = fopen($this->filename, 'a+');

        if (false === $file) {
            throw new UnableSaveFile(sprintf('Unable to save file "%s".', $this->filename));
        }

        $json = json_encode($context) ?: '';
        fputs(
            $file,
            $json . "\n"
        );
        fclose($file);
    }

    public function overwrite(array $context): void
    {
        if (!is_file($this->filename)) {
            Explorer::createFileIfNotExists($this->filename);
        }

        $file = fopen($this->filename, 'w+');

        if (false === $file) {
            throw new UnableSaveFile(sprintf('Unable to save file "%s".', $this->filename));
        }

        fwrite(
            $file,
            json_encode($context) ?: ''
        );
        fclose($file);
    }
}
