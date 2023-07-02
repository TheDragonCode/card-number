<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Validators\Banks;

use DragonCode\CardNumber\Validators\Card;

class VisaElectron extends Card
{
    protected static ?string $pattern = '/^4(026|17500|405|508|844|91[37])/';

    protected static array $numberLength = [16, 17];
}
