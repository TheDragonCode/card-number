<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

use DragonCode\CardNumber\Services\Validator;

use function in_array;
use function mb_strlen;
use function preg_match;
use function preg_replace;

abstract class Card
{
    protected static string $pattern;

    protected static array $numberLength = [16];

    public static function isValid(int|string $cardNumber): bool
    {
        $number = static::clear($cardNumber);

        return static::isValidLength($number)
            && static::isValidPattern($number)
            && static::isValidNumber($number);
    }

    protected static function isValidLength(string $number): bool
    {
        return in_array(static::length($number), static::$numberLength, true);
    }

    protected static function isValidPattern(string $number): bool
    {
        return (bool) preg_match(static::$pattern, $number);
    }

    protected static function isValidNumber(string $number): bool
    {
        return (new Validator())->isValid($number);
    }

    protected static function length(string $number): int
    {
        return mb_strlen($number, 'utf8');
    }

    protected static function clear(int|string $number): string
    {
        return preg_replace('/\D/', '', (string) $number);
    }
}
