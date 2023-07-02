<?php

declare(strict_types=1);

use DragonCode\CardNumber\Enums\CardType;
use DragonCode\CardNumber\Formatters\LoyaltyCharFormatter;

it('must be valid up to 99', function () {
    $formatter = LoyaltyCharFormatter::create();

    generatedEquals(1, 'FFAY', $formatter, CardType::chars);
    generatedEquals(2, 'FFES', $formatter, CardType::chars);
    generatedEquals(3, 'FFKN', $formatter, CardType::chars);
    generatedEquals(4, 'FFNE', $formatter, CardType::chars);
    generatedEquals(5, 'FFOZ', $formatter, CardType::chars);
    generatedEquals(6, 'FFSX', $formatter, CardType::chars);
    generatedEquals(7, 'FFXO', $formatter, CardType::chars);
    generatedEquals(8, 'FFYK', $formatter, CardType::chars);
    generatedEquals(9, 'FFZA', $formatter, CardType::chars);

    generatedEquals(10, 'FAFZ', $formatter, CardType::chars);
    generatedEquals(11, 'FAAX', $formatter, CardType::chars);
    generatedEquals(12, 'FAEO', $formatter, CardType::chars);
    generatedEquals(13, 'FAKK', $formatter, CardType::chars);
    generatedEquals(14, 'FANA', $formatter, CardType::chars);
    generatedEquals(15, 'FAOY', $formatter, CardType::chars);
    generatedEquals(16, 'FASS', $formatter, CardType::chars);
    generatedEquals(17, 'FAXN', $formatter, CardType::chars);
    generatedEquals(18, 'FAYE', $formatter, CardType::chars);
    generatedEquals(19, 'FAZF', $formatter, CardType::chars);
});

it('must be valid between 100 and 999', function () {
    $formatter = LoyaltyCharFormatter::create();

    generatedEquals(100, 'AFFY', $formatter, CardType::chars);
    generatedEquals(101, 'AFAS', $formatter, CardType::chars);
    generatedEquals(102, 'AFEN', $formatter, CardType::chars);
    generatedEquals(103, 'AFKE', $formatter, CardType::chars);
    generatedEquals(104, 'AFNF', $formatter, CardType::chars);
    generatedEquals(105, 'AFOX', $formatter, CardType::chars);
    generatedEquals(106, 'AFSO', $formatter, CardType::chars);
    generatedEquals(107, 'AFXK', $formatter, CardType::chars);
    generatedEquals(108, 'AFYA', $formatter, CardType::chars);
    generatedEquals(109, 'AFZZ', $formatter, CardType::chars);

    generatedEquals(200, 'EFFS', $formatter, CardType::chars);
    generatedEquals(201, 'EFAN', $formatter, CardType::chars);
    generatedEquals(202, 'EFEE', $formatter, CardType::chars);
    generatedEquals(203, 'EFKF', $formatter, CardType::chars);
    generatedEquals(204, 'EFNY', $formatter, CardType::chars);
    generatedEquals(205, 'EFOO', $formatter, CardType::chars);
    generatedEquals(206, 'EFSK', $formatter, CardType::chars);
    generatedEquals(207, 'EFXA', $formatter, CardType::chars);
    generatedEquals(208, 'EFYZ', $formatter, CardType::chars);
    generatedEquals(209, 'EFZX', $formatter, CardType::chars);
});

it('should separate 6 digits', function () {
    $formatter = LoyaltyCharFormatter::create();

    generatedEquals(12345, 'AEK-NOO', $formatter, CardType::chars);
    generatedEquals(23456, 'EKN-OSX', $formatter, CardType::chars);
    generatedEquals(34567, 'KNO-SXY', $formatter, CardType::chars);
    generatedEquals(45678, 'NOS-XYF', $formatter, CardType::chars);
    generatedEquals(56789, 'OSX-YZA', $formatter, CardType::chars);
    generatedEquals(67890, 'SXY-ZFN', $formatter, CardType::chars);
    generatedEquals(78901, 'XYZ-FAS', $formatter, CardType::chars);
    generatedEquals(89012, 'YZF-AEZ', $formatter, CardType::chars);
    generatedEquals(90123, 'ZFA-EKA', $formatter, CardType::chars);
});

it('should separate 7 digits', function () {
    $formatter = LoyaltyCharFormatter::create();

    generatedEquals(123456, 'AEK-NOSS', $formatter, CardType::chars);
    generatedEquals(234567, 'EKN-OSXS', $formatter, CardType::chars);
    generatedEquals(345678, 'KNO-SXYX', $formatter, CardType::chars);
    generatedEquals(456789, 'NOS-XYZX', $formatter, CardType::chars);
    generatedEquals(567890, 'OSX-YZFZ', $formatter, CardType::chars);
    generatedEquals(678901, 'SXY-ZFAF', $formatter, CardType::chars);
    generatedEquals(789012, 'XYZ-FAEE', $formatter, CardType::chars);
    generatedEquals(890123, 'YZF-AEKK', $formatter, CardType::chars);
    generatedEquals(901234, 'ZFA-EKNO', $formatter, CardType::chars);
});

it('should separate 10 digits', function () {
    $formatter = LoyaltyCharFormatter::create();

    generatedEquals(123456123, 'AE-KNOS-AEKZ', $formatter, CardType::chars);
    generatedEquals(234567123, 'EK-NOSX-AEKF', $formatter, CardType::chars);
    generatedEquals(345678123, 'KN-OSXY-AEKF', $formatter, CardType::chars);
    generatedEquals(456789123, 'NO-SXYZ-AEKA', $formatter, CardType::chars);
    generatedEquals(567890123, 'OS-XYZF-AEKA', $formatter, CardType::chars);
    generatedEquals(678901123, 'SX-YZFA-AEKK', $formatter, CardType::chars);
    generatedEquals(789012123, 'XY-ZFAE-AEKN', $formatter, CardType::chars);
    generatedEquals(890123123, 'YZ-FAEK-AEKS', $formatter, CardType::chars);
    generatedEquals(901234123, 'ZF-AEKN-AEKX', $formatter, CardType::chars);
});
