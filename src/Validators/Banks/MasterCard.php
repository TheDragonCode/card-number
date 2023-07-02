<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class MasterCard extends CardValidator
{
    protected static ?string $pattern = '/^(5[0-5]|2(2(2[1-9]|[3-9])|[3-6]|7(0|1|20)))/';
}
