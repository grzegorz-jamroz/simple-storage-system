<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

use SimpleStorageSystem\Document\Text as Text;

class TextDataFactory implements Text\EditorFactoryInterface
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function createWriter(): Text\WriterInterface
    {
        return new Text\Writer($this->filename);
    }

    public function createReader(): Text\ReaderInterface
    {
        return new Text\Reader($this->filename);
    }
}
