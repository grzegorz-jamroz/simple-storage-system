<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Json;

interface ReaderInterface
{
    public function read(): array;
}
