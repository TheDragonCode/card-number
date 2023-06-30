<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Formatters;

class LoyaltyFormatter extends Formatter
{
    protected int $minCardLength = 4;
}
