<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\Card;

class Troy extends Card
{
    protected static ?string $pattern = '/^9(?!(79200|79289))/';
}
