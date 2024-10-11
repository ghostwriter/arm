<?php

declare(strict_types=1);

namespace Tests\Unit;

use Generator;
use Ghostwriter\AutomatedRepositoryManager\TaskProcessor;
use Ghostwriter\Container\Container;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(TaskProcessor::class)]
final class TaskProcessorTest extends TestCase
{
    #[DataProvider('dataProvider')]
    public function test(bool $value): void
    {
        self::assertSame($value, $value);

        self::assertTrue(Container::getInstance()->get(TaskProcessor::class)->test());
    }

    /**
     * @return Generator<array{bool}>
     */
    public static function dataProvider(): Generator
    {
        yield from [
            'true' => [true],
            'false' => [false],
        ];
    }
}
