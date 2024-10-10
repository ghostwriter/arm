<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Git;

use Ghostwriter\Arm\Interface\StringableInterface;
use Ghostwriter\Arm\Tool\GitHubCli\RepositoryInterface;

interface BranchInterface extends StringableInterface
{
    public static function new(string $branch): self;

    public function checkout(string $branch): string;

    public function create(string $branch): string;

    public function delete(string $branch): string;

    public function exists(string $branch): bool;

    public function get(string $branch): string;

    public function list(): array;

    public function repository(): RepositoryInterface;

    public function set(string $branch): string;
}
