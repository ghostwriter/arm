<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface;

use Ghostwriter\Arm\Tool\GitHubCli\RepositoryInterface;

interface GitHubInterface
{
    public function repository(): RepositoryInterface;
}
