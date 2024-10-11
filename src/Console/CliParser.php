<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Console;

final readonly class CliParser
{
    public static function new(): self
    {
        return new self();
    }

    public function parse(array $arguments): array
    {
        $command = \array_shift($arguments);

        $options = [];

        return [$command, $options, $arguments];
    }
}
