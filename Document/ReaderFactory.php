<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document;

interface ReaderFactory
{
    public function createReader(): Reader;
}
