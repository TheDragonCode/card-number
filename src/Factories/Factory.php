<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Factories;

use DragonCode\CardNumber\Concerns\Makeable;
use DragonCode\CardNumber\Concerns\Stringable;

abstract class Factory
{
    use Makeable;
    use Stringable;

    abstract public function get(): string;
}
