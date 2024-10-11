<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager;

use Ghostwriter\AutomatedRepositoryManager\Interface\Git\WorkingDirectoryInterface;
use Override;

final readonly class WorkingDirectory implements WorkingDirectoryInterface
{
    public function __construct(
        private string $workingDirectory
    ) {
    }

    #[Override]
    public static function new(string $workingDirectory): self
    {
        return new self($workingDirectory);
    }

    #[Override]
    public function toString(): string
    {
        return $this->workingDirectory;
    }
}
