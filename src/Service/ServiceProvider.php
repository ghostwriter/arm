<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Service;

use Ghostwriter\Arm\Configuration;
use Ghostwriter\Arm\Console\Application;
use Ghostwriter\Arm\Interface\WorkspaceInterface;
use Ghostwriter\Arm\Service\Factory\ApplicationFactory;
use Ghostwriter\Arm\Service\Factory\ConfigurationFactory;
use Ghostwriter\Arm\Service\Factory\WorkspaceFactory;
use Ghostwriter\Arm\Workspace;
use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\ServiceProviderInterface;
use Override;
use Throwable;

final readonly class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @throws Throwable
     */
    #[Override]
    public function __invoke(ContainerInterface $container): void
    {
        $container->alias(Workspace::class, WorkspaceInterface::class);
        $container->factory(WorkspaceInterface::class, WorkspaceFactory::class);
        $container->factory(Application::class, ApplicationFactory::class);
        $container->factory(Configuration::class, ConfigurationFactory::class);
    }
}
