<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

use DragonCode\CardNumber\Concerns\Charsable;

use function array_keys;
use function array_values;
use function implode;
use function preg_match;
use function preg_replace;
use function str_replace;

class Chars extends Card
{
    use Charsable;

    protected static array $numberLength = [];

    public static function isValid(int|string $cardNumber): bool
    {
        $number = static::clear($cardNumber);

        return static::isValidLength($number)
            && static::isValidChars($number)
            && static::isValidPattern($number)
            && static::isValidNumber($number);
    }

    protected static function isValidNumber(string $number): bool
    {
        return parent::isValidNumber(
            str_replace(array_values(static::$chars), array_keys(static::$chars), $number)
        );
    }

    protected static function clear(int|string $number): string
    {
        return preg_replace("/[^\w]/", '', static::lower($number));
    }

    protected static function isValidChars(string $number): bool
    {
        $chars = static::charsPattern();

        return ! preg_match("/[^$chars\d]/", $number);
    }

    protected static function charsPattern(): string
    {
        return implode('', array_values(static::$chars));
    }
}
