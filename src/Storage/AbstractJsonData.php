<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

use SimpleStorageSystem\Document\Exception\FileNotExists;
use SimpleStorageSystem\Document\Json as Json;

abstract class AbstractJsonData implements Json\EditorInterface
{
    protected Json\Reader $reader;
    protected Json\Writer $writer;

    public function __construct(string $filename)
    {
        $factory = new JsonDataFactory($filename);
        $this->reader = $factory->createReader();
        $this->writer = $factory->createWriter();
    }

    public function read(): array
    {
        try {
            return $this->reader->read();
        } catch (FileNotExists $e) {
            return [];
        }
    }

    public function write(array $context): void
    {
        $this->writer->write($context);
    }

    public function overwrite(array $context): void
    {
        $this->writer->overwrite($context);
    }
}
