<?php

declare(strict_types=1);

namespace Ghostwriter\AutomatedRepositoryManager\Configuration;

use Ghostwriter\AutomatedRepositoryManager\Interface\ArrayableInterface;
use Override;

final class Repository implements ArrayableInterface
{
    //    public function __construct(
    //        private string $name,
    //        private string $organization,
    //        private array $topics = [],
    //    ) {
    //    }
    //
    #[Override]
    public function toArray(): array
    {
        return [
            //            'name' => $this->name,
            //            'organization' => $this->organization,
            //            'topics' => $this->topics,
        ];
    }
}
