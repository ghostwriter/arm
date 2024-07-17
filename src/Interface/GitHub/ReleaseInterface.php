<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\GitHub;

use Ghostwriter\Arm\Interface\GitHubCliInterface;
use Ghostwriter\Arm\Interface\StringableInterface;

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
