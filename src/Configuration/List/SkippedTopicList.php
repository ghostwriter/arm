<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Configuration\List;

use Ghostwriter\AutomatedRepositoryManager\Interface\ArrayableInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\GitHubCli\TopicInterface;
use Override;

final class SkippedTopicList implements ArrayableInterface
{
    /**
     * @param array<class-string<TopicInterface>,class-string<TopicInterface>> $topics
     */
    public function __construct(
        private array $topics = [],
    ) {
    }

    public static function new(): self
    {
        return new self();
    }

    /**
     * @param class-string<TopicInterface> ...$topics
     *
     * @return $this
     */
    public function add(string ...$topics): self
    {
        foreach ($topics as $topic) {
            $this->topics[$topic] = $topic;
        }

        return $this;
    }

    /**
     * @return array<class-string<TopicInterface>,class-string<TopicInterface>>
     */
    #[Override]
    public function toArray(): array
    {
        return $this->topics;
    }
}
