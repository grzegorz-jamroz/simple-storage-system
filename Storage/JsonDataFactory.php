<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

use SimpleStorageSystem\Document\EditorFactory;
use SimpleStorageSystem\Document\JsonReader;
use SimpleStorageSystem\Document\JsonWriter;

class JsonDataFactory implements EditorFactory
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function createWriter(): JsonWriter
    {
        return new JsonWriter($this->filename);
    }

    public function createReader(): JsonReader
    {
        return new JsonReader($this->filename);
    }
}
