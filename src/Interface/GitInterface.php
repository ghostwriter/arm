<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface;

interface GitInterface
{
    public static function new(string $workingDirectory): self;
}
