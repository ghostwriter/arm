<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\Git;

use Ghostwriter\AutomatedRepositoryManager\Interface\StringableInterface;

interface WorkingDirectoryInterface extends StringableInterface
{
    //    public function create(): void;
    //    public function delete(): void;
    //
    //    public function exists(): bool;

    public static function new(string $workingDirectory): self;
}
