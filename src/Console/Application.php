<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Console;

use Ghostwriter\Arm\Configuration;
use Ghostwriter\Arm\Configuration\Repository;
use Ghostwriter\Arm\Service\ServiceProvider;
use Ghostwriter\Container\Container;

use const PHP_EOL;
use const PHP_VERSION;

use function sprintf;
use function var_dump;

final readonly class Application
{
    public function __construct(
        private string $name,
        private string $version,
        private string $author,
        private Configuration $configuration,
    ) {
    }

    public function run(): void
    {
        $container = Container::getInstance();
        echo sprintf('%s %s by %s and contributors.', $this->name, $this->version, $this->author), PHP_EOL, PHP_EOL;

        echo 'Runtime: PHP ', PHP_VERSION, PHP_EOL;

        echo 'Configuration:', $this->configuration->workspace()
            ->toString(),PHP_EOL,PHP_EOL;

        $taskList = $this->configuration->taskList()
            ->toArray();

        $repositories = $this->configuration->repositoryList()
            ->toArray();
        echo 'Repositories:', PHP_EOL;
        foreach ($repositories as $repository=> $taskListw) {
            var_dump($repository, $taskListw);
            echo 'Tasks:', PHP_EOL;
            foreach ($taskList as $class => $task) {
                var_dump($class, $task);

                $container->invoke($class, [$container->build(Repository::class, [$repository]), $task]);
            }
        }

        foreach ($this->configuration->repositories() as $repository) {
            foreach ($this->configuration->taskList()->toArray() as $task) {
                $task->run($repository);
            }

            //            foreach ($repository->topics() as $topic) {
            //                echo $topic->toString(), PHP_EOL;
            //            }
        }
    }

    public static function new(): self
    {
        $container = Container::getInstance();

        if (! $container->has(ServiceProvider::class)) {
            $container->provide(ServiceProvider::class);
        }

        return $container->get(self::class);
    }
}
