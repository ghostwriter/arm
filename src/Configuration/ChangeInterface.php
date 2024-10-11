<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Configuration;

interface ChangeInterface
{
    public function __invoke(string $organization, string $repository): void;
}
