<?php

declare(strict_types=1);

use Ghostwriter\AutomatedRepositoryManager\Configuration;
use Ghostwriter\AutomatedRepositoryManager\Task\AddToGitIgnore;
use Ghostwriter\AutomatedRepositoryManager\Task\RemoveDirectory;
use Ghostwriter\AutomatedRepositoryManager\Task\RemoveFile;
use Ghostwriter\AutomatedRepositoryManager\Task\ReplaceInFile;
use Ghostwriter\AutomatedRepositoryManager\Task\UpdateComposerDevPackageVersion;
use Ghostwriter\AutomatedRepositoryManager\Task\UpdateComposerPackageVersion;
use Ghostwriter\AutomatedRepositoryManager\Task\UpdateNpmPackageVersion;

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
