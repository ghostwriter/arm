<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Git\Commit\Author;

use Ghostwriter\Arm\Interface\StringableInterface;

interface EmailInterface extends StringableInterface
{
    public static function new(string $email): self;
}
