<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\Task;

use Ghostwriter\AutomatedRepositoryManager\Interface\TaskInterface;

interface ComposerTaskInterface extends TaskInterface
{
    public function packages(): array;
}
