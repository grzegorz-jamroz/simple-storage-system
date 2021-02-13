<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document;

use SimpleStorageSystem\Utilities\Explorer;

class JsonWriter implements Writer
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
        fputs(
            $file,
            json_encode($context) . "\n"
        );
        fclose($file);
    }

    public function overwrite(array $context): void
    {
        if (!is_file($this->filename)) {
            Explorer::createFileIfNotExists($this->filename);
        }

        $file = fopen($this->filename, 'w+');
        fwrite(
            $file,
            json_encode($context)
        );
        fclose($file);
    }
}
