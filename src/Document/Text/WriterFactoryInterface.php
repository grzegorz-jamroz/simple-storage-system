<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Text;

interface WriterFactoryInterface
{
    public function createWriter(): WriterInterface;
}
