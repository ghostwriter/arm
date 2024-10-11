<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface;

interface ComposerInterface
{
    public static function new(string $workingDirectory): self;
}
