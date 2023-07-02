<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class DinersClub extends CardValidator
{
    protected static ?string $pattern = '/^3(0[0-5]|[68][0-9])[0-9]/';

    protected static array $numberLength = [14];
}
