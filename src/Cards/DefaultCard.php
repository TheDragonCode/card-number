<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class DefaultCard extends Card
{
    protected static string $pattern = '';

    public static function isValid(int|string $cardNumber): bool
    {
        return static::isValidNumber(
            static::clear($cardNumber)
        );
    }
}
