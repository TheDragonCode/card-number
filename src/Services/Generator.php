<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Services;

use DragonCode\CardNumber\Exceptions\ControlNumberException;
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

        throw new ControlNumberException($this->id);
    }

    protected function parse(string $id): int
    {
        return $this->parser->parse($id)[0];
    }

    protected function prepare(): string
    {
        return $this->formatter->prepare($this->id);
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
