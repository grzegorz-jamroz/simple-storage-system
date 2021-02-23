<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Json;

interface WriterInterface
{
    /**
     * @param array<mixed, mixed> $context
     */
    public function write(array $context): void;

    /**
     * @param array<mixed, mixed> $context
     */
    public function overwrite(array $context): void;
}
