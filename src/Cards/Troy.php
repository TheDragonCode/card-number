<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Cards;

class Troy extends Card
{
    protected static string $pattern = '/^9(?!(79200|79289))/';
}
