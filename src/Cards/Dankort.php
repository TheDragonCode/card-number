<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class Dankort extends Card
{
    protected static ?string $pattern = '/^5019/';
}
