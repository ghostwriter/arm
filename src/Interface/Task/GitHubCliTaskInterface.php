<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\Task;

use Ghostwriter\AutomatedRepositoryManager\Interface\TaskInterface;

interface GitHubCliTaskInterface extends TaskInterface
{
    public function accessToken(): string;

    public function repository(): string;
}
