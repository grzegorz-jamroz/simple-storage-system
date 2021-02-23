<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

class TextData extends AbstractTextData
{
    public function __construct(string $filename)
    {
        parent::__construct($filename);
    }
}
