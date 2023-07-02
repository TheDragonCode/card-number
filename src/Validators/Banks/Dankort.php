<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\Card;

class Dankort extends Card
{
    protected static ?string $pattern = '/^5019/';
}
