<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\GitHubCli;

use Ghostwriter\AutomatedRepositoryManager\Interface\GitHubCliInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\StringableInterface;

interface UrlInterface extends GitHubCliInterface, StringableInterface
{
}
