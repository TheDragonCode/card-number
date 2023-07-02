<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators;

class DefaultCard extends Card
{
    public static function isValid(int|string $cardNumber): bool
    {
        return static::isValidNumber(
            static::clear($cardNumber)
        );
    }
}
