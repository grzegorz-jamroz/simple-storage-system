<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Json;

interface ReaderFactoryInterface
{
    public function createReader(): ReaderInterface;
}
