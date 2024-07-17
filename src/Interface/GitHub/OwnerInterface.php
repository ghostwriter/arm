<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\GitHub;

use Ghostwriter\Arm\Interface\GitHubCliInterface;
use Ghostwriter\Arm\Interface\RepositoryInterface;
use Ghostwriter\Arm\Interface\StringableInterface;

interface OwnerInterface extends GitHubCliInterface, StringableInterface
{
    /**
     * @return array<RepositoryInterface>
     */
    public function repositories(): array;
}
