<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Configuration\List;

use Ghostwriter\Arm\Interface\ArrayableInterface;
use Ghostwriter\Arm\Interface\RepositoryInterface;
use Override;

final class RepositoryList implements ArrayableInterface
{
    /**
     * @param array<class-string<RepositoryInterface>,class-string<RepositoryInterface>> $repositories
     */
    public function __construct(
        private array $repositories = [],
    ) {
    }

    public static function new(): self
    {
        return new self();
    }

    /**
     * @param class-string<RepositoryInterface> ...$repositories
     *
     * @return $this
     */
    public function add(string ...$repositories): self
    {
        foreach ($repositories as $repository) {
            $this->repositories[$repository] = $repository;
        }

        return $this;
    }

    /**
     * @return array<class-string<RepositoryInterface>,class-string<RepositoryInterface>>
     */
    #[Override]
    public function toArray(): array
    {
        return $this->repositories;
    }
}
