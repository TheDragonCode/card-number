<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Concerns;

use function mb_strlen;
use function str_pad;

trait Stringable
{
    protected function length(string $number, int $offset = 0): int
    {
        return mb_strlen($number, 'utf8') + $offset;
    }

    protected function strPad(int|string $string, int $length): string
    {
        return str_pad((string) $string, $length, '0', STR_PAD_LEFT);
    }
}
