<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class UnionPay extends Card
{
    protected static string $pattern = '/^62(?!(2126|2925))/';

    protected static array $numberLength = [16, 17, 18, 19];
}
