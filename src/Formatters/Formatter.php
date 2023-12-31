<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Formatters;

use DragonCode\CardNumber\Concerns\Makeable;
use DragonCode\CardNumber\Concerns\Stringable;

use function array_map;
use function array_reverse;
use function implode;
use function str_split;
use function strrev;

abstract class Formatter
{
    use Makeable;
    use Stringable;

    protected int $minCardLength = 4;

    protected int $splitLength = 4;

    protected string $delimiter = '-';

    public function format(string $number): string
    {
        $number = static::strPad($number, $this->minCardLength);
        $length = static::length($number);

        return $this->pretty($number, $length);
    }

    protected function pretty(string $number, int $length): string
    {
        return match (true) {
            $length <= 4 => $number,
            $length <= 6 => $this->split($number, 3),
            default      => $this->split($number, $this->splitLength)
        };
    }

    protected function split(string $number, int $length): string
    {
        $values  = array_reverse(str_split(strrev($number), $length));
        $reverse = array_map(fn (string $value) => strrev($value), $values);

        return implode($this->delimiter, $reverse);
    }
}
