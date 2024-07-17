<?php

declare(strict_types=1);

use Ghostwriter\Arm\Configuration;
use Ghostwriter\Arm\Task\AddToGitIgnore;
use Ghostwriter\Arm\Task\RemoveDirectory;
use Ghostwriter\Arm\Task\RemoveFile;
use Ghostwriter\Arm\Task\ReplaceInFile;
use Ghostwriter\Arm\Task\UpdateComposerDevPackageVersion;
use Ghostwriter\Arm\Task\UpdateComposerPackageVersion;
use Ghostwriter\Arm\Task\UpdateNpmPackageVersion;

return Configuration::new()
    ->owners('ActionableSteps', 'BMHVillage', 'codepoet', 'ghostwriter', 'laminas', 'mezzio', 'mockery', 'nathane')
    ->repositories('CollectiveUnconscious/gist-blog')
    ->skip('ghostwriter/compliance', 'mockery/mockery')
    ->skipTopics('security-only', 'security-updates-only')
    ->tasks([
        AddToGitIgnore::class => ['!.gitkeep', '.cache/', '.env', 'node_modules/', 'vendor/'],
        RemoveFile::class => ['file.txt'],
        RemoveDirectory::class => ['directory'],
        ReplaceInFile::class => [
            '.gitignore' => [
                'search' => 'replace',
                '#regex-search#' => 'regex-replace',
            ],
            'LICENSE' => [
                '#Copyright \(c\) (.*?), Nathanael Esayeas#' => 'Copyright (c) 2014-2024, Nathanael Esayeas',
            ],
        ],
        UpdateComposerPackageVersion::class => [
            'php' => '>=8.3',
            'ghostwriter/event-dispatcher' => '^5.0.1',
            'ghostwriter/container' => '^4.0.1',
        ],
        UpdateComposerDevPackageVersion::class => [
            'ghostwriter/coding-standard' => 'dev-main',
        ],
        UpdateNpmPackageVersion::class => [
            'axios' => '1.7.2',
        ],
    ]);

// Skip the repository 'organization/repository'

// ->withGitHubToken($_ENV['GITHUB_TOKEN']);

// The application will be able to run git commands in multiple repositories at once.
// We will be able to specify the repositories we want to run the command in, and the command we want to run.

// we are going to use the Symfony Process component to run the command

// 1. Create a class that will represent the GitHub API.
// 2. Create a class that will run git commands in multiple repositories at once.
