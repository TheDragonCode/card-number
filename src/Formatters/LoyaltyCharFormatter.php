<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Formatters;

use DragonCode\CardNumber\Concerns\Charsable;

use function array_keys;
use function array_values;
use function str_replace;

class LoyaltyCharFormatter extends Formatter
{
    use Charsable;

    protected function pretty(string $number, int $length): string
    {
        return parent::pretty(static::upper($this->encode($number)), $length);
    }

    protected function encode(string $value): string
    {
        return str_replace(array_keys(static::$chars), array_values(static::$chars), $value);
    }
}
