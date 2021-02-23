<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document;

interface Processor
{
    /**
     * @return array<mixed, mixed>
     */
    public function process(): array;
}
