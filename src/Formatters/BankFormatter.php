<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Formatters;

class BankFormatter extends Formatter
{
    protected int $minCardLength = 16;

    protected string $delimiter = ' ';
}
