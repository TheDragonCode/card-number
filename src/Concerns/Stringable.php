<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Concerns;

use function mb_strlen;
use function mb_strtolower;
use function mb_strtoupper;
use function str_pad;

use const STR_PAD_LEFT;

trait Stringable
{
    protected static function length(string $value, int $offset = 0): int
    {
        return mb_strlen($value, 'utf8') + $offset;
    }

    protected static function strPad(int|string $value, int $length): string
    {
        return str_pad((string) $value, $length, '0', STR_PAD_LEFT);
    }

    protected static function lower(int|string $value): string
    {
        return mb_strtolower((string) $value, 'utf8');
    }

    protected static function upper(int|string $value): string
    {
        return mb_strtoupper((string) $value, 'utf8');
    }
}
