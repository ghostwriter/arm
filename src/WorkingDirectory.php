<?php

declare(strict_types=1);

namespace Ghostwriter\Arm;

use Ghostwriter\Arm\Interface\Git\WorkingDirectoryInterface;
use Override;

final readonly class WorkingDirectory implements WorkingDirectoryInterface
{
    public function __construct(
        private string $workingDirectory
    ) {
    }

    #[Override]
    public function toString(): string
    {
        return $this->workingDirectory;
    }

    #[Override]
    public static function new(string $workingDirectory): self
    {
        return new self($workingDirectory);
    }
}
