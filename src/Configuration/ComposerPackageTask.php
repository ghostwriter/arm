<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Configuration;

use Ghostwriter\Arm\Interface\TaskInterface;

abstract class ComposerPackageTask implements TaskInterface
{
    public function __invoke(string $organization, string $repository): void
    {
        $this->update($organization, $repository);
    }

    abstract protected function update(string $organization, string $repository): void;
}
