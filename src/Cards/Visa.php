<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class Visa extends Card
{
    protected static ?string $pattern = '/^4/';

    protected static array $numberLength = [13, 16];
}
