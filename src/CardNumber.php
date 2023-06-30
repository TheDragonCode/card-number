<?php

declare(strict_types=1);

namespace DragonCode\CardNumber;

use DragonCode\CardNumber\Factories\Factory;
use DragonCode\CardNumber\Formatters\DefaultFormatter;
use DragonCode\CardNumber\Formatters\Formatter;
use DragonCode\CardNumber\Services\Generator;
use DragonCode\CardNumber\Services\Validator;

class CardNumber
{
    public static function isValid(int|string $number): bool
    {
        return (new Validator())->isValid((string) $number);
    }

    public static function generate(int|string|Factory $id, Formatter $formatter = new DefaultFormatter()): string
    {
        return (new Generator($id, $formatter))->generate();
    }
}
