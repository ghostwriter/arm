<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\GitHub;

use Ghostwriter\AutomatedRepositoryManager\Interface\GitHubCliInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\StringableInterface;

interface BranchInterface extends GitHubCliInterface, StringableInterface
{
}
