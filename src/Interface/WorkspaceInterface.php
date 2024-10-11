<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface;

interface WorkspaceInterface extends StringableInterface
{
    //    public function create(string $workspace): string;
    //
    //    public function delete(string $workspace): string;
    //
    //    public function exists(string $workspace): bool;
    //
    //    public function get(string $workspace): string;
    //
    //    public function list(): array;
    //
    //    public function set(string $workspace): string;
    public static function new(string $workspace): self;
}
