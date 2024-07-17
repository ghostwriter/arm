<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Task;

use Ghostwriter\Arm\Interface\TaskInterface;

interface GitHubCliTaskInterface extends TaskInterface
{
    public function accessToken(): string;

    public function repository(): string;
}
