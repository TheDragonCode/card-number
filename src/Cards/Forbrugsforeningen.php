<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class Forbrugsforeningen extends Card
{
    protected static ?string $pattern = '/^600/';
}
