<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Task;

use Ghostwriter\AutomatedRepositoryManager\Interface\Task\Composer\ComposerDevPackageTaskInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\TaskProcessorInterface;
use Override;
use Symfony\Component\Process\Process;

final readonly class UpdateComposerDevPackageVersion implements ComposerDevPackageTaskInterface
{
    public function __construct(
        private array $packages,
        private TaskProcessorInterface $taskProcessor
    ) {
    }

    public function __invoke(string $organization, string $repository): void
    {
        $path = \sprintf('%s/%s', $organization, $repository);

        foreach ($this->packages as $package => $version) {
            $this->update($path, $package, $version);
        }
    }

    #[Override]
    public function packages(): array
    {
        return $this->packages;
    }

    private function update(string $path, string $package, string $version): void
    {
        (new Process(['composer', 'require', '--dev', \sprintf('%s:%s', $package, $version)], $path))->mustRun();
    }
}
