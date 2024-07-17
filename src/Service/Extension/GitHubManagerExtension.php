<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Service\Extension;

use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\ExtensionInterface;
use Override;

final class GitHubManagerExtension implements ExtensionInterface
{
    #[Override]
    public function __invoke(ContainerInterface $container, object $service): object
    {
        return $service;
    }
}
