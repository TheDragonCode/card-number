<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class Mir extends CardValidator
{
    protected static ?string $pattern = '/^220/';

    protected static array $numberLength = [16, 19];
}
