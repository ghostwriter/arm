<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Git\Commit;

use Ghostwriter\Arm\Interface\StringableInterface;

interface MessageInterface extends StringableInterface
{
    public static function new(string $message): self;
}
