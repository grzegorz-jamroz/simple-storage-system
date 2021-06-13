<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

use SimpleStorageSystem\Document\Exception\FileNotExists;
use SimpleStorageSystem\Utilities\HtmlToolkit;

class HtmlData extends AbstractTextData
{
    public function __construct(string $filename)
    {
        parent::__construct($filename);
    }

    public function write(string $content): void
    {
        $content = HtmlToolkit::cleanUp($content);
        $this->writer->write($content);
    }

    public function overwrite(string $content): void
    {
        $content = HtmlToolkit::cleanUp($content);
        $this->writer->overwrite($content);
    }

    /**
     * @throws FileNotExists
     */
    public function getData(): string
    {
        return $this->reader->read();
    }
}
