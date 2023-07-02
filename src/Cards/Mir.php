<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class Mir extends Card
{
    protected static ?string $pattern = '/^220/';

    protected static array $numberLength = [16, 19];
}
