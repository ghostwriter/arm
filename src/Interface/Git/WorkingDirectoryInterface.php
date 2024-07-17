<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Git;

use Ghostwriter\Arm\Interface\StringableInterface;

interface WorkingDirectoryInterface extends StringableInterface
{
    //    public function create(): void;
    //    public function delete(): void;
    //
    //    public function exists(): bool;

    public static function new(string $workingDirectory): self;
}
