<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class Troy extends CardValidator
{
    protected static ?string $pattern = '/^9(?!(79200|79289))/';
}
