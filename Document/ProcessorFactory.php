<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document;

interface ProcessorFactory
{
    public function createProcessor(): Processor;
}
