<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Storage;

class JsonData extends AbstractJsonData
{
    public function __construct(string $filename)
    {
        parent::__construct($filename);
    }
}
