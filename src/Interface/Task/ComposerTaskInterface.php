<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Task;

use Ghostwriter\Arm\Interface\TaskInterface;

interface ComposerTaskInterface extends TaskInterface
{
    public function packages(): array;
}
