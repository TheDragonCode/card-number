<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Factories;

use function date;

class CustomerFactory extends Factory
{
    protected ?string $level = null;

    protected ?string $customerId = null;

    protected string $year;

    public function __construct()
    {
        $this->year = $this->year();
    }

    public function level(int $level): static
    {
        $this->level = $this->strPad($level, 2);

        return $this;
    }

    public function customer(int $customerId): static
    {
        $this->customerId = $this->strPad($customerId, 6);

        return $this;
    }

    public function get(): string
    {
        return $this->year . $this->level . $this->customerId;
    }

    protected function year(): string
    {
        return date('y');
    }
}
