<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

use SimpleStorageSystem\Document\Json as Json;

class JsonDataFactory implements Json\EditorFactoryInterface
{
    private string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function createWriter(): Json\Writer
    {
        return new Json\Writer($this->filename);
    }

    public function createReader(): Json\Reader
    {
        return new Json\Reader($this->filename);
    }
}
