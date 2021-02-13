<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document;

interface Reader
{
    public function read(): array;
}
