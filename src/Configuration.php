<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager;

use Ghostwriter\AutomatedRepositoryManager\Configuration\List\OwnerList;
use Ghostwriter\AutomatedRepositoryManager\Configuration\List\RepositoryList;
use Ghostwriter\AutomatedRepositoryManager\Configuration\List\SkippedRepositoryList;
use Ghostwriter\AutomatedRepositoryManager\Configuration\List\SkippedTopicList;
use Ghostwriter\AutomatedRepositoryManager\Configuration\List\TaskList;
use Ghostwriter\AutomatedRepositoryManager\Interface\TaskInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\WorkspaceInterface;

final readonly class Configuration
{
    public function __construct(
        private OwnerList $ownerList,
        private RepositoryList $repositoryList,
        private SkippedRepositoryList $skippedRepositoryList,
        private SkippedTopicList $skippedTopicList,
        private TaskList $taskList,
        private WorkspaceInterface $workspace,
    ) {
    }

    public static function new(?string $workingDirectory = null): self
    {
        $workingDirectory = match ($workingDirectory) {
            null => \getcwd() ?: \sys_get_temp_dir(),
            default => $workingDirectory,
        };

        return new self(
            OwnerList::new(),
            RepositoryList::new(),
            SkippedRepositoryList::new(),
            SkippedTopicList::new(),
            TaskList::new(),
            Workspace::new($workingDirectory),
        );
    }

    public function owners(string ...$owners): self
    {
        $this->ownerList->add(...$owners);

        return $this;
    }

    public function packages(): array
    {
        $repositories = $this->repositoryList->toArray();

        foreach ($this->ownerList->toArray() as $organization) {
            $repositories = \array_merge($repositories, $organization->repositories());
        }

        return \array_diff($repositories, $this->skippedRepositoryList->toArray());
    }

    public function repositories(string ...$repositories): self
    {
        $this->repositoryList->add(...$repositories);

        return $this;
    }

    public function repositoryList(): RepositoryList
    {
        return $this->repositoryList;
    }

    public function skip(string ...$repositories): self
    {
        $this->skippedRepositoryList->add(...$repositories);

        return $this;
    }

    public function skipTopics(string ...$topics): self
    {
        $this->skippedTopicList->add(...$topics);

        return $this;
    }

    public function taskList(): TaskList
    {
        return $this->taskList;
    }

    /**
     * @param array<class-string<TaskInterface>,array<string,array<string,string>|string>> $tasks
     *
     * @return $this
     */
    public function tasks(array $tasks): self
    {
        $this->taskList->add($tasks);

        return $this;
    }

    public function workspace(): WorkspaceInterface
    {
        return $this->workspace;
    }
}
