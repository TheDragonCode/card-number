<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Services;

use DragonCode\CardNumber\Concerns\Stringable;

use function preg_replace;

class Validator
{
    use Stringable;

    public function __construct(
        protected readonly Parser $parser = new Parser()
    ) {}

    public function isValid(string $number): bool
    {
        $number = $this->clean($number);
        $length = $this->length($number);

        if ($number == 0 || $length === 1) {
            return false;
        }

        [$checksum, $control] = $this->parse($number);

        return ($checksum % 10) === 0 && ($checksum - $control) == $number[$length - 1];
    }

    public function isInvalid(string $number): bool
    {
        return ! $this->isValid($number);
    }

    public function parse(string $number): array
    {
        return $this->parser->parse($number);
    }

    protected function clean(string $number): string
    {
        return preg_replace('/\D/', '', $number);
    }
}
