<?php

declare(strict_types=1);

namespace Ghostwriter\Arm\Exception;

use Ghostwriter\Arm\Interface\ExceptionInterface;
use RuntimeException;

final class ArmException extends RuntimeException implements ExceptionInterface
{
}
