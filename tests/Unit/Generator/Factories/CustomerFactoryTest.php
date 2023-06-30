<?php

declare(strict_types=1);

use DragonCode\CardNumber\Factories\CustomerFactory;
use DragonCode\CardNumber\Formatters\LoyaltyFormatter;

it('must be the customer\'s factory', function () {
    $formatter = LoyaltyFormatter::create();

    $factory1 = CustomerFactory::create()->level(4)->customer(1234);
    $factory2 = CustomerFactory::create()->level(3)->customer(12345);
    $factory3 = CustomerFactory::create()->level(1)->customer(123456);

    $year = date('y');

    generatedEquals($factory1, $year . '0-4001-2348', $formatter);
    generatedEquals($factory2, $year . '0-3012-3451', $formatter);
    generatedEquals($factory3, $year . '0-1123-4566', $formatter);
});
