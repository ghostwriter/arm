<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Git;

use Ghostwriter\Arm\Interface\Git\Commit\AuthorInterface;
use Ghostwriter\Arm\Interface\Git\Commit\MessageInterface;
use Ghostwriter\Arm\Interface\StringableInterface;

interface CommitInterface extends StringableInterface
{
    public function author(): AuthorInterface;

    public function branch(): BranchInterface;

    public function message(): MessageInterface;

    public static function new(AuthorInterface $author, BranchInterface $branch, MessageInterface $message): self;
}

//    public function commit(string $commit): string;
//
//    public function create(string $commit): string;
//
//    public function delete(string $commit): string;
//
//    public function exists(string $commit): bool;
//
//    public function get(string $commit): string;
//
//    public function list(): array;
//
//    public function set(string $commit): string;
