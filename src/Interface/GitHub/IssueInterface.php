<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\GitHub;

interface IssueInterface
{
    public function create(string $issue): string;

    public function delete(string $issue): string;

    public function exists(string $issue): bool;

    public function get(string $issue): string;

    public function list(): array;

    public function set(string $issue): string;
}
