<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Git\Commit;

use Ghostwriter\Arm\Interface\Git\Commit\Author\EmailInterface;
use Ghostwriter\Arm\Interface\Git\Commit\Author\NameInterface;

interface AuthorInterface
{
    public static function new(string $name, string $email): self;

    public function email(): EmailInterface;

    public function name(): NameInterface;
}
