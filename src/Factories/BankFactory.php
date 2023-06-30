<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Factories;

class BankFactory extends Factory
{
    protected ?string $paymentType = null;

    protected ?string $bankNumber = null;

    protected ?string $bankInfo = null;

    protected ?string $bankProgram = null;

    protected ?string $clientId = null;

    public function paymentType(int|string $type): static
    {
        $this->paymentType = (string) $type;

        return $this;
    }

    public function bank(int|string $id, int|string $info, int|string $program): static
    {
        $this->bankNumber  = $this->strPad($id, 3);
        $this->bankInfo    = $this->strPad($info, 2);
        $this->bankProgram = $this->strPad($program, 2);

        return $this;
    }

    public function client(int|string $number): static
    {
        $this->clientId = $this->strPad($number, 7);

        return $this;
    }

    public function get(): string
    {
        return $this->paymentType . $this->bankNumber . $this->bankInfo . $this->bankProgram . $this->clientId;
    }
}
