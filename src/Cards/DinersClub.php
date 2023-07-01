<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class DinersClub extends Card
{
    protected static string $pattern = '/^3(0[0-5]|[68][0-9])[0-9]/';

    protected static array $numberLength = [14];
}
