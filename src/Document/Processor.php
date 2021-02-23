<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document;

interface Processor
{
    public function process(): array;
}
