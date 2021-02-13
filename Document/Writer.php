<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document;

interface Writer
{
    public function write(array $context): void;

    public function overwrite(array $context): void;
}
