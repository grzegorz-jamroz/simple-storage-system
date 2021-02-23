<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Text;

interface ReaderInterface
{
    public function read(): string;
}
