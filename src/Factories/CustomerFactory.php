<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Factories;

use function date;

class CustomerFactory extends Factory
{
    protected ?string $level = null;

    protected int $levelLength = 2;

    protected ?string $customerId = null;

    protected int $customerLength = 6;

    protected string $year;

    public function __construct()
    {
        $this->year = $this->year();
    }

    public function level(int $level): static
    {
        $this->level = $this->strPad($level, $this->levelLength);

        return $this;
    }

    public function customer(int $customerId): static
    {
        $this->customerId = $this->strPad($customerId, $this->customerLength);

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
