<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Json;

interface ReaderInterface
{
    /**
     * @return array<mixed, mixed>
     */
    public function read(): array;
}
