<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Services;

use DragonCode\CardNumber\Factories\Factory;
use DragonCode\CardNumber\Formatters\Formatter;

use function abs;

class Generator
{
    public function __construct(
        protected readonly Factory|int|string $id,
        protected readonly Formatter $formatter,
        protected readonly Parser $parser = new Parser(),
    ) {}

    public function generate(): string
    {
        $number   = $this->prepare();
        $checksum = $this->parse($number);

        if ($mod = $checksum % 10) {
            return $this->format($number . abs(10 - $mod));
        }

        return $this->format($number . '0');
    }

    protected function parse(string $number): int
    {
        return $this->parser->parse($number . '0')[0];
    }

    protected function prepare(): string
    {
        if ($this->id instanceof Factory) {
            return $this->id->get();
        }

        return (string) $this->id;
    }

    protected function format(string $number): string
    {
        return $this->formatter->format($number);
    }
}
