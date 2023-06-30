<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Exceptions;

use Exception;

class ControlNumberException extends Exception
{
    public function __construct(int|string $number)
    {
        parent::__construct('No valid control digit could be found for the ID "' . $number . '".', 400);
    }
}
