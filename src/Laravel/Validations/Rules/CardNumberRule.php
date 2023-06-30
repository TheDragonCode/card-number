<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Laravel\Validations\Rules;

use Closure;
use DragonCode\CardNumber\CardNumber;
use Illuminate\Contracts\Validation\ValidationRule;

class CardNumberRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! CardNumber::isValid($value)) {
            $fail('The :attribute must be a valid card number.')->translate();
        }
    }
}
