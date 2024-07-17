<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\GitHubCli;

use Ghostwriter\Arm\Interface\Git\CommitInterface;
use Ghostwriter\Arm\Interface\GitHubCliInterface;
use Ghostwriter\Arm\Interface\StringableInterface;
use Ghostwriter\Arm\Tool\GitHubCli\NameInterface;

interface TagInterface extends GitHubCliInterface, StringableInterface
{
    public function commit(): CommitInterface;

    public function name(): NameInterface;
}
