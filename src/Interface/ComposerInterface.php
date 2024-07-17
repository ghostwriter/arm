<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface;

interface ComposerInterface
{
    public static function new(string $workingDirectory): self;
}
