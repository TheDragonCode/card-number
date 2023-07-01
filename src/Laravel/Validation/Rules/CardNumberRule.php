<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Laravel\Validation\Rules;

use Closure;
use DragonCode\CardNumber\CardNumber;
use DragonCode\CardNumber\Enums\CardType;
use Illuminate\Contracts\Validation\ValidationRule;

use function implode;

class CardNumberRule implements ValidationRule
{
    public function __construct(
        protected readonly CardType|string|null $type = null
    ) {}

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->isInvalidType()) {
            $fail('The :attribute field must contain a card number of one of the following types: :types.')
                ->translate([
                    'types' => $this->availableCardTypes(),
                ]);
        }

        if ($this->isInvalidCard($value)) {
            $fail('The :attribute must be a valid card number.')->translate();
        }
    }

    protected function isInvalidType(): bool
    {
        if ($type = $this->type) {
            return ! ! CardType::tryFrom($type);
        }

        return false;
    }

    protected function isInvalidCard(int|string $cardNumber): bool
    {
        return CardNumber::isInvalid($cardNumber, $this->type);
    }

    protected function availableCardTypes(): string
    {
        return implode(', ', CardType::values());
    }
}
