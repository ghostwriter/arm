<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\GitHubCli;

use Ghostwriter\AutomatedRepositoryManager\Interface\Git\CommitInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\GitHubCliInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\StringableInterface;

interface TagInterface extends GitHubCliInterface, StringableInterface
{
    public function commit(): CommitInterface;

    public function name(): NameInterface;
}
