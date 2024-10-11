<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\Git\Commit\Author;

use Ghostwriter\AutomatedRepositoryManager\Interface\StringableInterface;

interface NameInterface extends StringableInterface
{
    public static function new(string $name): self;
}
