<?php

declare(strict_types=1);

use DragonCode\CardNumber\Factories\BankFactory;
use DragonCode\CardNumber\Formatters\BankFormatter;

it('must be the credit card\'s factory', function () {
    $formatter = BankFormatter::create();

    $factory1 = BankFactory::create()->paymentType(2)->bank(1, 4, 7)->client(123);
    $factory2 = BankFactory::create()->paymentType(3)->bank(12, 45, 75)->client(12345);
    $factory3 = BankFactory::create()->paymentType(4)->bank(123, 40, 70)->client(1234567);

    generatedEquals($factory1, '2001 0407 0000 1234', $formatter);
    generatedEquals($factory2, '3012 4575 0012 3452', $formatter);
    generatedEquals($factory3, '4123 4070 1234 5675', $formatter);
});
