<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager;

use Ghostwriter\AutomatedRepositoryManager\Interface\WorkspaceInterface;
use Ghostwriter\AutomatedRepositoryManager\Service\Factory\WorkspaceFactory;
use Ghostwriter\Container\Attribute\Factory;
use InvalidArgumentException;
use Override;

#[Factory(WorkspaceFactory::class)]
final readonly class Workspace implements WorkspaceInterface
{
    public function __construct(
        private string $workspace
    ) {
        if (\trim($workspace) === '') {
            throw new InvalidArgumentException('Workspace cannot be empty');
        }

        if (! \is_dir($workspace)) {
            throw new InvalidArgumentException('Workspace must be a directory');
        }
    }

    #[Override]
    public static function new(string $workspace): self
    {
        return new self($workspace);
    }

    #[Override]
    public function toString(): string
    {
        return $this->workspace;
    }
}
