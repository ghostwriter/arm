<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Service\Factory;

use Composer\InstalledVersions;
use Ghostwriter\Arm\Configuration;
use Ghostwriter\Arm\Console\Application;
use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\FactoryInterface;
use Override;

final readonly class ApplicationFactory implements FactoryInterface
{
    private const string NAME = 'Arm';

    private const string PACKAGE = 'ghostwriter/arm';

    #[Override]
    public function __invoke(ContainerInterface $container): object
    {
        return new Application(
            self::NAME,
            InstalledVersions::getPrettyVersion(self::PACKAGE),
            'Nathanael Esayeas (github.com/ghostwriter)',
            $container->get(Configuration::class),
        );
    }
}
