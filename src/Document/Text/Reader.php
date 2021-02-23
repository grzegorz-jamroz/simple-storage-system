<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Text;

use SimpleStorageSystem\Document\Exception\FileNotExists;

class Reader implements ReaderInterface
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function read(): string
    {
        if (!is_file($this->filename)) {
            throw new FileNotExists(sprintf('File %s not exists.', $this->filename));
        }

        return file_get_contents($this->filename) ?: '';
    }
}
