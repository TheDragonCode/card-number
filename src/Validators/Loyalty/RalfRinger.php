<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Loyalty;

use DragonCode\CardNumber\Validators\Card;

class RalfRinger extends Card
{
    protected static ?string $pattern = '/^20(\d{11})/';

    protected static array $numberLength = [13];
}
