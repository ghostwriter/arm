<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface;

interface RepositoryInterface
{
    public function clone(string $repository): string;

    public function create(string $repository): string;

    public function delete(string $repository): string;

    public function exists(string $repository): bool;

    public function get(string $repository): string;

    public function list(): array;

    public function set(string $repository): string;
}
