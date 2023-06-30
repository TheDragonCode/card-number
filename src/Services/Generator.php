<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Services;

use DragonCode\CardNumber\Formatters\Formatter;

class Generator
{
    public function __construct(
        protected readonly int $id,
        protected readonly Formatter $formatter,
        protected readonly Validator $validator = new Validator(),
        protected readonly Parser $parser = new Parser()
    ) {}

    public function generate(): string
    {
        $number = $this->prepare();

        for ($i = 0; $i <= 9; ++$i) {
            if ($this->isValid($number . $i)) {
                return $this->format($number . $i);
            }
        }

        return $number;
    }

    protected function prepare(): string
    {
        return (string) $this->id;
    }

    protected function format(string $number): string
    {
        return $this->formatter->format($number);
    }

    protected function isValid(string $number): bool
    {
        return $this->validator->isValid($number);
    }
}
