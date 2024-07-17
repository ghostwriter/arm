<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\GitHub;

use Ghostwriter\Arm\Interface\GitHubCliInterface;
use Ghostwriter\Arm\Interface\StringableInterface;

interface BranchInterface extends GitHubCliInterface, StringableInterface
{
}
