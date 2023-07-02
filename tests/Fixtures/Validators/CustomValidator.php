<?php

declare(strict_types=1);

namespace Tests\Fixtures\Validators;

use DragonCode\CardNumber\Validators\CardValidator;

class CustomValidator extends CardValidator
{
    protected static ?string $pattern = '/^[3-5]{3}/';

    protected static array $numberLength = [4];
}
