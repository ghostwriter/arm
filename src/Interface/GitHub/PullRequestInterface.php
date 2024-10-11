<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\GitHub;

use Ghostwriter\AutomatedRepositoryManager\Interface\GitHub\Branch\BaseBranchInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\GitHub\Branch\HeadBranchInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\GitHub\PullRequest\BodyInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\GitHub\PullRequest\TitleInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\RepositoryInterface;

interface PullRequestInterface
{
    /**
     * @param LabelInterface $labels
     */
    public static function new(
        OwnerInterface $owner,
        RepositoryInterface $interfaceRepository,
        BaseBranchInterface $baseBranch,
        HeadBranchInterface $headBranch,
        TitleInterface $title,
        BodyInterface $body,
        array $labels = []
    ): void;

    public function baseBranch(): BaseBranchInterface;

    public function body(): BodyInterface;

    public function create(string $pullRequest): string;

    public function create(string $pullRequest): string;

    public function create(): void;

    public function delete(string $pullRequest): string;

    public function delete(string $pullRequest): string;

    public function delete(): void;

    public function exists(string $pullRequest): bool;

    public function exists(string $pullRequest): bool;

    public function get(string $pullRequest): string;

    public function get(string $pullRequest): string;

    public function headBranch(): HeadBranchInterface;

    public function labels(): array;

    public function list(): array;

    public function list(): array;

    public function owner(): OwnerInterface;

    public function repository(): RepositoryInterface;

    public function set(string $pullRequest): string;

    public function set(string $pullRequest): string;

    public function title(): TitleInterface;

    public function update(TitleInterface $title, BodyInterface $body, array $labels = []): void;
}
