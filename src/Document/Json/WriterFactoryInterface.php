<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Json;

interface WriterFactoryInterface
{
    public function createWriter(): WriterInterface;
}
