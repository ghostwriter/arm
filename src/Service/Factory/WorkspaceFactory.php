<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Service\Factory;

use Ghostwriter\AutomatedRepositoryManager\Interface\WorkspaceInterface;
use Ghostwriter\AutomatedRepositoryManager\Workspace;
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
