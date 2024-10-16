<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\Composer;

interface PackageInterface
{
    public function name(): NameInterface;

    public function vendor(): VendorInterface;

    public function version(): VersionInterface;
}
