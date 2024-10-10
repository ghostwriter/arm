<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Configuration;

use Ghostwriter\Shell\Interface\ShellInterface;
use RuntimeException;

final readonly class CommandRunner
{
    public function __construct(
        private ShellInterface $shell,
        private array $repositories
    ) {
    }

    public function run(): void
    {
        foreach ($this->repositories as $repository => $arguments) {
            $command = \array_shift($arguments);

            $result = $this->shell->execute($command, $arguments, $repository);

            if ($result->exitCode() !== 0) {
                throw new RuntimeException($result->stderr());
            }
        }
    }
}
