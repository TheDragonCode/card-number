<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class Forbrugsforeningen extends CardValidator
{
    protected static ?string $pattern = '/^600/';
}
