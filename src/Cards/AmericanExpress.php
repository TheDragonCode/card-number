<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class AmericanExpress extends Card
{
    protected static ?string $pattern = '/^3[47][0-9]/';

    protected static array $numberLength = [15, 16];
}
