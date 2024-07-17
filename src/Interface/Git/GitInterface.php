<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Git;

use Ghostwriter\Arm\Interface\Git\Commit\AuthorInterface;
use Ghostwriter\Arm\Tool\GitHubCli\RepositoryInterface;

interface GitInterface
{
    public function clone(RepositoryInterface $gitHubCliRepository): void;

    public function commit(
        RepositoryInterface $gitHubCliRepository,
        BranchInterface $branch,
        AuthorInterface $author,
        CommitInterface $commit,
    ): void;

    public function delete(string $commit): string;

    public function exists(string $commit): bool;

    public function get(string $commit): string;

    public function list(): array;

    public function set(string $commit): string;

    public static function new(WorkingDirectoryInterface $workingDirectory): self;
}
