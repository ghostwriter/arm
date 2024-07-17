<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\GitHub;

interface MilestoneInterface
{
    public function create(string $milestone): string;

    public function delete(string $milestone): string;

    public function exists(string $milestone): bool;

    public function get(string $milestone): string;

    public function list(): array;

    public function set(string $milestone): string;
}
