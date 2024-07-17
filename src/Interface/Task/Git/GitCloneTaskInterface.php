<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Task\Git;

use Ghostwriter\Arm\Interface\Task\GitTaskInterface;

interface GitCloneTaskInterface extends GitTaskInterface
{
    public function repository(): string;
}
