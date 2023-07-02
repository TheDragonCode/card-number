<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\Card;

class Mir extends Card
{
    protected static ?string $pattern = '/^220/';

    protected static array $numberLength = [16, 19];
}
