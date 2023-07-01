<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Laravel\Validation\Rules;

use Closure;
use DragonCode\CardNumber\CardNumber;
use DragonCode\CardNumber\Enums\CardType;
use Illuminate\Contracts\Validation\ValidationRule;

use function array_map;
use function implode;
use function is_array;
use function is_bool;
use function is_null;

class CardNumberRule implements ValidationRule
{
    public function __construct(
        protected readonly array|CardType|string|null $type = null
    ) {}

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $isValid = false;

        foreach ($this->types() as $type) {
            if ($this->isInvalidType($type)) {
                $this->throwType($fail);
            }

            if ($this->isValidCard($value, $type)) {
                $isValid = true;

                break;
            }
        }

        if (! $isValid) {
            $this->throwCard($fail);
        }
    }

    protected function throwType(Closure $fail): void
    {
        $fail('The :attribute field must contain a card number of one of the following types: :types.')
            ->translate([
                'types' => $this->availableCardTypes(),
            ]);
    }

    protected function throwCard(Closure $fail): void
    {
        $fail('The :attribute field must be a valid card number.')->translate();
    }

    protected function isInvalidType(bool|CardType|null $type): bool
    {
        return is_bool($type);
    }

    protected function isValidCard(int|string $cardNumber, ?CardType $type): bool
    {
        return CardNumber::isValid($cardNumber, $type);
    }

    protected function availableCardTypes(): string
    {
        return implode(', ', CardType::values());
    }

    protected function types(): array
    {
        return array_map(function (mixed $type) {
            if (is_null($type) || $type instanceof CardType) {
                return $type;
            }

            if ($type = CardType::tryFrom($type)) {
                return $type;
            }

            return false;
        }, $this->wrapTypes());
    }

    protected function wrapTypes(): array
    {
        return is_array($this->type) ? $this->type : [$this->type];
    }
}
