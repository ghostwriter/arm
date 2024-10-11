<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Configuration\List;

use Ghostwriter\AutomatedRepositoryManager\Interface\ArrayableInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\GitHub\OwnerInterface;
use Override;

final class OwnerList implements ArrayableInterface
{
    /**
     * @param array<class-string<OwnerInterface>,class-string<OwnerInterface>> $owners
     */
    public function __construct(
        private array $owners = [],
    ) {
    }

    public static function new(): self
    {
        return new self();
    }

    /**
     * @param class-string<OwnerInterface> ...$owners
     *
     * @return $this
     */
    public function add(string ...$owners): self
    {
        foreach ($owners as $owner) {
            $this->owners[$owner] = $owner;
        }

        return $this;
    }

    /**
     * @return array<class-string<OwnerInterface>,class-string<OwnerInterface>>
     */
    #[Override]
    public function toArray(): array
    {
        return $this->owners;
    }
}
