<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Configuration\List;

use Ghostwriter\Arm\Interface\ArrayableInterface;
use Ghostwriter\Arm\Interface\TaskInterface;
use Override;

final class TaskList implements ArrayableInterface
{
    /**
     * @param array<class-string<TaskInterface>,array<string,array<string,string>|string>> $tasks
     */
    public function __construct(
        private array $tasks = [],
    ) {
    }

    public static function new(): self
    {
        return new self();
    }

    /**
     * @param array<class-string<TaskInterface>,array<string,array<string,string>|string>> $tasks
     *
     * @return $this
     */
    public function add(array $tasks): self
    {
        $this->tasks = \array_merge($this->tasks, $tasks);

        return $this;
    }

    /**
     * @return array<class-string<TaskInterface>,array<string,array<string,string>|string>>
     */
    #[Override]
    public function toArray(): array
    {
        return $this->tasks;
    }
}
