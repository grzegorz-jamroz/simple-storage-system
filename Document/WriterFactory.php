<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document;

interface WriterFactory
{
    public function createWriter(): Writer;
}
