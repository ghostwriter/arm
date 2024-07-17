<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\GitHubCli;

use Ghostwriter\Arm\Interface\GitHubCliInterface;
use Ghostwriter\Arm\Interface\StringableInterface;

interface RepositoryInterface extends GitHubCliInterface, StringableInterface
{
}
