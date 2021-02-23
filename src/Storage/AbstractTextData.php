<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

use SimpleStorageSystem\Document\Exception\FileNotExists;
use SimpleStorageSystem\Document\Text as Text;

abstract class AbstractTextData implements Text\EditorInterface
{
    protected Text\ReaderInterface $reader;
    protected Text\WriterInterface $writer;

    public function __construct(string $filename)
    {
        $factory = new TextDataFactory($filename);
        $this->reader = $factory->createReader();
        $this->writer = $factory->createWriter();
    }

    public function read(): string
    {
        try {
            return $this->reader->read();
        } catch (FileNotExists $e) {
            return '';
        }
    }

    public function write(string $content): void
    {
        $this->writer->write($content);
    }

    public function overwrite(string $content): void
    {
        $this->writer->overwrite($content);
    }
}
