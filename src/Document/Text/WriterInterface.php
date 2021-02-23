<?php

declare(strict_types=1);

namespace SimpleStorageSystem\Document\Text;

interface WriterInterface
{
    public function write(string $content): void;

    public function overwrite(string $content): void;
}
