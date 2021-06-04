<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

use SimpleStorageSystem\Document\Exception\FileNotExists;
use SimpleStorageSystem\Document\Exception\UnableSaveFile;
use SimpleStorageSystem\Document\Json as Json;

abstract class AbstractJsonData implements Json\EditorInterface
{
    protected string $filename;
    protected Json\Reader $reader;
    protected Json\Writer $writer;

    public function __construct(string $filename)
    {
        $factory = new JsonDataFactory($filename);
        $this->reader = $factory->createReader();
        $this->writer = $factory->createWriter();
        $this->filename = $filename;
    }

    public function read(): array
    {
        try {
            return $this->reader->read();
        } catch (FileNotExists $e) {
            return [];
        }
    }

    /**
     * @param array $context
     * @param int $flags same as for json_encode
     *
     * @throws UnableSaveFile
     */
    public function write(
        array $context,
        int $flags = 0
    ): void {
        $this->writer->write($context, $flags);
    }

    /**
     * @param array $context
     * @param int $flags same as for json_encode
     *
     * @throws UnableSaveFile
     */
    public function overwrite(
        array $context,
        int $flags = 0
    ): void {
        $this->writer->overwrite($context, $flags);
    }

    public function delete(): bool
    {
        return unlink($this->filename);
    }
}
