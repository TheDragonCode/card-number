<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class Visa extends CardValidator
{
    protected static ?string $pattern = '/^4/';

    protected static array $numberLength = [13, 16];
}
