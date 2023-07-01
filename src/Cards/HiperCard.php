<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class HiperCard extends Card
{
    protected static ?string $pattern = '/^(606282\d{7}(\d{3})?)|(3841\d{15})/';

    protected static array $numberLength = [13, 16, 19];
}
