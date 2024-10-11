<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Interface\Composer;

use Ghostwriter\AutomatedRepositoryManager\Interface\Composer\Version\BuildInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\Composer\Version\MajorInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\Composer\Version\MinorInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\Composer\Version\PatchInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\Composer\Version\PreReleaseInterface;
use Ghostwriter\AutomatedRepositoryManager\Interface\StringableInterface;

interface VersionInterface extends StringableInterface
{
    public function build(): BuildInterface;

    public function major(): MajorInterface;

    public function minor(): MinorInterface;

    public function patch(): PatchInterface;

    public function preRelease(): PreReleaseInterface;
}
