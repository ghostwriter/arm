<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface;

interface GitInterface
{
    public static function new(string $workingDirectory): self;
}
