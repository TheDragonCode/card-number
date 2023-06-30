<?php

declare(strict_types=1);

use DragonCode\CardNumber\Formatters\BankFormatter;

it('should be separated', function () {
    $formatter = new BankFormatter();

    generatedEquals(558047337202473, '5580 4733 7202 4733', $formatter);
    generatedEquals(529391143678555, '5293 9114 3678 5557', $formatter);
    generatedEquals(542356762469002, '5423 5676 2469 0026', $formatter);
    generatedEquals(526763093326766, '5267 6309 3326 7669', $formatter);
    generatedEquals(558340052505973, '5583 4005 2505 9735', $formatter);
    generatedEquals(522268380720263, '5222 6838 0720 2639', $formatter);
    generatedEquals(528306196533334, '5283 0619 6533 3346', $formatter);
    generatedEquals(546687518443413, '5466 8751 8443 4133', $formatter);
    generatedEquals(526823420504195, '5268 2342 0504 1958', $formatter);
    generatedEquals(548949094390379, '5489 4909 4390 3791', $formatter);
});
