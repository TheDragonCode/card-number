<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

use DragonCode\CardNumber\Concerns\Stringable;
use DragonCode\CardNumber\Services\Validator;

use function in_array;
use function preg_match;
use function preg_replace;

abstract class Card
{
    use Stringable;

    protected static ?string $pattern = null;

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
        if ($length = static::$numberLength) {
            return in_array(static::length($number), $length, true);
        }

        return true;
    }

    protected static function isValidPattern(string $number): bool
    {
        if ($pattern = static::$pattern) {
            return (bool) preg_match($pattern, $number);
        }

        return true;
    }

    protected static function isValidNumber(string $number): bool
    {
        return (new Validator())->isValid($number);
    }

    protected static function clear(int|string $number): string
    {
        return preg_replace('/\D/', '', (string) $number);
    }
}
