<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\Git\Commit;

use Ghostwriter\AutomatedRepositoryManager\Interface\StringableInterface;

interface MessageInterface extends StringableInterface
{
    public static function new(string $message): self;
}
