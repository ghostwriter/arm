<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Exception;

use Ghostwriter\AutomatedRepositoryManager\Interface\ExceptionInterface;
use RuntimeException;

final class ArmException extends RuntimeException implements ExceptionInterface
{
}
