<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Interface\Composer;

use Ghostwriter\Arm\Interface\Composer\Version\BuildInterface;
use Ghostwriter\Arm\Interface\Composer\Version\MajorInterface;
use Ghostwriter\Arm\Interface\Composer\Version\MinorInterface;
use Ghostwriter\Arm\Interface\Composer\Version\PatchInterface;
use Ghostwriter\Arm\Interface\Composer\Version\PreReleaseInterface;
use Ghostwriter\Arm\Interface\StringableInterface;

interface VersionInterface extends StringableInterface
{
    public function build(): BuildInterface;

    public function major(): MajorInterface;

    public function minor(): MinorInterface;

    public function patch(): PatchInterface;

    public function preRelease(): PreReleaseInterface;
}
