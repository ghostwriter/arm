<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Configuration\List;

use Ghostwriter\AutomatedRepositoryManager\Interface\ArrayableInterface;
use Override;

final class SkippedRepositoryList implements ArrayableInterface
{
    public function __construct(
        private array $skipped = [],
    ) {
    }

    public static function new(): self
    {
        return new self();
    }

    public function add(string ...$skipped): self
    {
        foreach ($skipped as $skip) {
            $this->skipped[$skip] = $skip;
        }

        return $this;
    }

    #[Override]
    public function toArray(): array
    {
        return $this->skipped;
    }
}
