<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface;

interface ProjectInterface
{
    public function create(string $project): string;

    public function delete(string $project): string;

    public function exists(string $project): bool;

    public function get(string $project): string;

    public function list(): array;

    public function set(string $project): string;
}
