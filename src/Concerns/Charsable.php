<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Concerns;

trait Charsable
{
    protected static array $chars = [
        0 => 'f',
        1 => 'a',
        2 => 'e',
        3 => 'k',
        4 => 'n',
        5 => 'o',
        6 => 's',
        7 => 'x',
        8 => 'y',
        9 => 'z',
    ];
}
