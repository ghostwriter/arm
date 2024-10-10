<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Service\Factory;

use Ghostwriter\Arm\Interface\WorkspaceInterface;
use Ghostwriter\Arm\Workspace;
use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\FactoryInterface;
use Override;
use Throwable;

final readonly class WorkspaceFactory implements FactoryInterface
{
    /**
     * @throws Throwable
     */
    #[Override]
    public function __invoke(ContainerInterface $container): WorkspaceInterface
    {
        return Workspace::new(\getcwd() ?: \sys_get_temp_dir());
    }
}
