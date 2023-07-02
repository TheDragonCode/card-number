<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class Jcb extends CardValidator
{
    protected static ?string $pattern = '/^(?:2131|1800|35\d{3})/';

    protected static array $numberLength = [16, 17, 18, 19];
}
