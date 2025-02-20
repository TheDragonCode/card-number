<?php

declare(strict_types=1);

use DragonCode\CardNumber\Factories\CustomerFactory;
use DragonCode\CardNumber\Formatters\LoyaltyFormatter;

it('must be the customer\'s factory', function () {
    $formatter = LoyaltyFormatter::create();

    $factory1 = CustomerFactory::create()->level(4)->customer(1234);
    $factory2 = CustomerFactory::create()->level(3)->customer(12345);
    $factory3 = CustomerFactory::create()->level(1)->customer(123456);

    generatedEquals($factory1, '250-4001-2343', $formatter);
    generatedEquals($factory2, '250-3012-3456', $formatter);
    generatedEquals($factory3, '250-1123-4561', $formatter);
});
