<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Service\Factory;

use Ghostwriter\Arm\Configuration;
use Ghostwriter\Arm\Interface\WorkspaceInterface;
use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\FactoryInterface;
use Override;
use RuntimeException;
use Throwable;

use function file_exists;
use function sprintf;

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

        if (! file_exists($configFile)) {
            throw new RuntimeException(sprintf('Configuration file "%s" does not exist.', $configFile));
        }

        return require $configFile;
    }
}
