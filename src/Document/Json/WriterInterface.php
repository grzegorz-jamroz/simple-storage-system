<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Json;

interface WriterInterface
{
    public function write(array $context): void;

    public function overwrite(array $context): void;
}
