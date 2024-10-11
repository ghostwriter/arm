<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\Git;

use Ghostwriter\AutomatedRepositoryManager\Interface\Git\Commit\AuthorInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\RepositoryInterface;

interface GitInterface
{
    public static function new(WorkingDirectoryInterface $workingDirectory): self;

    public function clone(RepositoryInterface $interfaceRepository): void;

    public function commit(
        RepositoryInterface $interfaceRepository,
        BranchInterface $branch,
        AuthorInterface $author,
        CommitInterface $commit,
    ): void;

    public function delete(string $commit): string;

    public function exists(string $commit): bool;

    public function get(string $commit): string;

    public function list(): array;

    public function set(string $commit): string;
}
