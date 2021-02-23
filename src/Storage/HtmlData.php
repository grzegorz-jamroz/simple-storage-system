<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

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
}
