<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class AmericanExpress extends CardValidator
{
    protected static ?string $pattern = '/^3[47][0-9]/';

    protected static array $numberLength = [15, 16];
}
