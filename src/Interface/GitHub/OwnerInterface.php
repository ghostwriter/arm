<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\GitHub;

use Ghostwriter\AutomatedRepositoryManager\Interface\GitHubCliInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\RepositoryInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\StringableInterface;

interface OwnerInterface extends GitHubCliInterface, StringableInterface
{
    /**
     * @return array<RepositoryInterface>
     */
    public function repositories(): array;
}
