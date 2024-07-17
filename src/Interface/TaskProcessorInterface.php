<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface;

/**
 * Defines a processor for task events.
 */
interface TaskProcessorInterface
{
    /**
     * Provide all listeners with a task event to process.
     *
     * @param TaskInterface $task the task to process
     *
     * @return TaskInterface the task that was passed, now modified by callers
     */
    public function process(TaskInterface $task): TaskInterface;
}
