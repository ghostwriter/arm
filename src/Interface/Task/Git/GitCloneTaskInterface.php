<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\Task\Git;

use Ghostwriter\AutomatedRepositoryManager\Interface\Task\GitTaskInterface;

interface GitCloneTaskInterface extends GitTaskInterface
{
    public function repository(): string;
}
