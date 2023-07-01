<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class Discovery extends Card
{
    protected static ?string $pattern = '/^6(011|22126|22925|4[4-9]|5)/';
}
