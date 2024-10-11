<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\GitHub;

use Ghostwriter\AutomatedRepositoryManager\Interface\GitHubCliInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\StringableInterface;

interface ReleaseInterface extends GitHubCliInterface, StringableInterface
{
    public function create(string $release): string;

    public function delete(string $release): string;

    public function exists(string $release): bool;

    public function get(string $release): string;

    public function list(): string;

    public function set(string $release): string;

    public function tagName(): string;

    public function url(): string;
}
