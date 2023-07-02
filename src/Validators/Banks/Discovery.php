<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class Discovery extends CardValidator
{
    protected static ?string $pattern = '/^6(011|22126|22925|4[4-9]|5)/';
}
