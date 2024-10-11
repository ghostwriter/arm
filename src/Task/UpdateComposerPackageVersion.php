<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Task;

use Ghostwriter\AutomatedRepositoryManager\Configuration\Process;
use Ghostwriter\AutomatedRepositoryManager\Interface\Task\Composer\ComposerPackageTaskInterface;
use Override;

final readonly class UpdateComposerPackageVersion implements ComposerPackageTaskInterface
{
    public function __construct(
        private array $packages
    ) {
    }

    #[Override]
    public function __invoke(string $organization, string $repository): void
    {
        $path = \sprintf('%s/%s', $organization, $repository);

        foreach ($this->packages as $package => $version) {
            $this->update($package, $version, $path);
        }
    }

    #[Override]
    public function packages(): array
    {
        return $this->packages;
    }

    private function update(string $package, string $path, string $version): void
    {
        (new Process(['composer', 'require', \sprintf('%s:%s', $package, $version)], $path))->mustRun();
    }
}
