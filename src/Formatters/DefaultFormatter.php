<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Formatters;

class DefaultFormatter extends Formatter
{
    public function format(string $number): string
    {
        return $number;
    }
}
