<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Text;

interface ReaderFactoryInterface
{
    public function createReader(): ReaderInterface;
}
