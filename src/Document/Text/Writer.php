<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Text;

use SimpleStorageSystem\Utilities\Explorer;

class Writer implements WriterInterface
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function write(string $content): void
    {
        if (!is_file($this->filename)) {
            Explorer::createFileIfNotExists($this->filename);
        }

        $file = fopen($this->filename, 'a+');
        fputs(
            $file,
            $content . "\n"
        );
        fclose($file);
    }

    public function overwrite(string $content): void
    {
        if (!is_file($this->filename)) {
            Explorer::createFileIfNotExists($this->filename);
        }

        $file = fopen($this->filename, 'w+');
        fwrite(
            $file,
            $content
        );
        fclose($file);
    }
}
