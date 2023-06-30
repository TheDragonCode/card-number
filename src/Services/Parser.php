<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Services;

use DragonCode\CardNumber\Concerns\Stringable;

class Parser
{
    use Stringable;

    public function parse(string $number): array
    {
        $checksum = 0;
        $control  = 0;

        $length = $this->length($number, -1);

        for ($i = $length; $i >= 0; --$i) {
            $digit = (int) $number[$i];

            if (($length - $i) % 2) {
                $digit *= 2;

                $checksum += ($digit <= 9 ? $digit : $digit - 9);
                $control  += ($digit <= 9 ? $digit : $digit - 9);
            }
            else {
                $checksum += $digit;
                $control  += ($i !== $length ? $digit : 0);
            }
        }

        return [$checksum, $control];
    }
}
