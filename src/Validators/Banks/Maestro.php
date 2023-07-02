<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\CardValidator;

class Maestro extends CardValidator
{
    protected static ?string $pattern = '/^(5(018|0[235]|[678])|6(1|39|7|8|9))/';

    protected static array $numberLength = [12, 13, 14, 15, 16, 17, 18, 19];
}
