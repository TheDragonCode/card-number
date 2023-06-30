<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Concerns;

trait Makeable
{
    public static function create(): static
    {
        return new static();
    }
}
