<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface;

use Ghostwriter\AutomatedRepositoryManager\Tool\GitHubCli\RepositoryInterface;

interface GitHubInterface
{
    public function repository(): RepositoryInterface;
}
