<?php

declare(strict_types=1);

namespace Ghostwriter\Arm;

use Ghostwriter\Arm\Interface\WorkspaceInterface;
use Ghostwriter\Arm\Service\Factory\WorkspaceFactory;
use Ghostwriter\Container\Attribute\Factory;
use InvalidArgumentException;
use Override;

use function is_dir;
use function trim;

#[Factory(WorkspaceFactory::class)]
final readonly class Workspace implements WorkspaceInterface
{
    public function __construct(
        private string $workspace
    ) {
        if (trim($workspace) === '') {
            throw new InvalidArgumentException('Workspace cannot be empty');
        }

        if (! is_dir($workspace)) {
            throw new InvalidArgumentException('Workspace must be a directory');
        }
    }

    #[Override]
    public function toString(): string
    {
        return $this->workspace;
    }

    #[Override]
    public static function new(string $workspace): self
    {
        return new self($workspace);
    }
}
