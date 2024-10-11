<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\GitHub;

interface TagInterface
{
    public function create(string $tag): string;

    public function delete(string $tag): string;

    public function exists(string $tag): bool;

    public function get(string $tag): string;

    public function list(): array;

    public function set(string $tag): string;
}
