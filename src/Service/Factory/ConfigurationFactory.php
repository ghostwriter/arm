<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Service\Factory;

use Ghostwriter\AutomatedRepositoryManager\Configuration;
use Ghostwriter\AutomatedRepositoryManager\Interface\WorkspaceInterface;
use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\FactoryInterface;
use Override;
use RuntimeException;
use Throwable;

final readonly class ConfigurationFactory implements FactoryInterface
{
    /**
     * @throws Throwable
     */
    #[Override]
    public function __invoke(ContainerInterface $container): Configuration
    {
        $workspace = $container->get(WorkspaceInterface::class);

        $configFile = $workspace->toString() . '/arm.php';

        if (! \file_exists($configFile)) {
            throw new RuntimeException(\sprintf('Configuration file "%s" does not exist.', $configFile));
        }

        return require $configFile;
    }
}
