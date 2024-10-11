<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Service;

use Ghostwriter\AutomatedRepositoryManager\Configuration;
use Ghostwriter\AutomatedRepositoryManager\Console\Application;
use Ghostwriter\AutomatedRepositoryManager\Interface\WorkspaceInterface;
use Ghostwriter\AutomatedRepositoryManager\Service\Factory\ApplicationFactory;
use Ghostwriter\AutomatedRepositoryManager\Service\Factory\ConfigurationFactory;
use Ghostwriter\AutomatedRepositoryManager\Service\Factory\WorkspaceFactory;
use Ghostwriter\AutomatedRepositoryManager\Workspace;
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
