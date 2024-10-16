#!/usr/bin/env php
<?php

declare(strict_types=1);

use Ghostwriter\AutomatedRepositoryManager\AutomatedRepositoryManager;
use Ghostwriter\Cli\Application;

use const STDERR;

/** @var ?string $_composer_autoload_path */
(static function (string $composerAutoloadPath): void {

    if (! \file_exists($composerAutoloadPath)) {
        \fwrite(
            STDERR,
            \sprintf('[ERROR]Cannot locate "%s"\n please run "composer install"\n', $composerAutoloadPath)
        );
        exit(1);
    }

    require $composerAutoloadPath;

    /** #BlackLivesMatter */
    Application::new(AutomatedRepositoryManager::class)->run($_SERVER['argv']);
})($_composer_autoload_path ?? \dirname(__DIR__) . '/vendor/autoload.php');
