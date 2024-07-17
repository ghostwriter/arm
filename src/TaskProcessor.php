<?php

declare(strict_types=1);

namespace Ghostwriter\Arm;

use Ghostwriter\Arm\Interface\TaskInterface;
use Ghostwriter\Arm\Interface\TaskProcessorInterface;
use Ghostwriter\Container\List\Providers;
use Override;

/** @see TaskProcessorTest */
final readonly class TaskProcessor implements TaskProcessorInterface
{
    public function __construct(
        private Providers $providers
    ) {
    }

    #[Override]
    public function process(TaskInterface $task): TaskInterface
    {
        //        foreach ($event->getTasks() as $task) {
        //            $task();
        //        }

        return $task;
    }

    public function test(): bool
    {
        return true;
    }
}
