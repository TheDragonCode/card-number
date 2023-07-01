<?php

declare(strict_types=1);

use DragonCode\CardNumber\Enums\CardType;

it('must be an valid card number', function () {
    isValid('5413 5168 4131 5315', CardType::masterCard);
    isValid('2351 6843 5686 8432', CardType::masterCard);
    isValid('2229 6516 1681 3680', CardType::masterCard);
    isValid('2720 1684 6416 1843', CardType::masterCard);
    isValid('5019 1404 0123 4564', CardType::masterCard);
    isValid('5011 4951 2345 6780', CardType::masterCard);
    isValid('5004 1404 0000 1235', CardType::masterCard);
    isValid('5062 8212 3456 7892', CardType::masterCard);
    isValid('5036 8131 3841 6485', CardType::masterCard);
    isValid('5016 8131 3841 6489', CardType::masterCard);
    isValid('5413 5168 4131 5315', CardType::masterCard);
    isValid('2301 6868 4646 8443', CardType::masterCard);
    isValid('5026 8434 8316 8680', CardType::masterCard);
});

it('must be an invalid card number', function () {
    isInvalid('0247 3140 4123 4566', CardType::masterCard);
    isInvalid('4019 1404 0123 4567', CardType::masterCard);
    isInvalid('5613 5168 4131 5313', CardType::masterCard);
    isInvalid('2951 6843 5686 8436', CardType::masterCard);
    isInvalid('2929 6516 1681 3683', CardType::masterCard);
    isInvalid('2730 1684 6416 1841', CardType::masterCard);

    isInvalid('30 4687 9012 3452', CardType::masterCard);
    isInvalid('30 6687 9012 3457', CardType::masterCard);
    isInvalid('6011 4951 2345 6788', CardType::masterCard);
    isInvalid('6221 2649 5123 6787', CardType::masterCard);
    isInvalid('6229 2549 5123 6780', CardType::masterCard);
    isInvalid('6004 1404 0000 1233', CardType::masterCard);
    isInvalid('6 0628 2123 4568', CardType::masterCard);
    isInvalid('6062 8212 3456 7890', CardType::masterCard);
    isInvalid('384 1123 4567 8912 3452', CardType::masterCard);
    isInvalid('5 0628 2123 4569', CardType::masterCard);
    isInvalid('284 1123 4567 8912 3453', CardType::masterCard);
    isInvalid('2131 1356 1381 3510', CardType::masterCard);
    isInvalid('1 8001 3513 8438 4382', CardType::masterCard);
    isInvalid('35 1868 4438 1138 4890', CardType::masterCard);
    isInvalid('213 1681 6843 5681 3897', CardType::masterCard);
    isInvalid('1131 1356 1381 3512', CardType::masterCard);
    isInvalid('1 7001 3513 8438 4384', CardType::masterCard);
    isInvalid('25 1868 4438 1138 4892', CardType::masterCard);
    isInvalid('212 1681 6843 5681 3898', CardType::masterCard);
    isInvalid('5018 6138 3377', CardType::masterCard);
    isInvalid('5 0568 4131 3585', CardType::masterCard);
    isInvalid('58 3813 5138 6813', CardType::masterCard);
    isInvalid('561 6816 8138 4135', CardType::masterCard);
    isInvalid('5 6396 8434 3168 4650', CardType::masterCard);
    isInvalid('56 1168 6431 6816 8439', CardType::masterCard);
    isInvalid('639 1684 3483 1568 4681', CardType::masterCard);
    isInvalid('4018 6138 3370', CardType::masterCard);
    isInvalid('5 0168 4131 3589', CardType::masterCard);
    isInvalid('54 3813 5138 6817', CardType::masterCard);
    isInvalid('551 6816 8138 4137', CardType::masterCard);
    isInvalid('5 5396 8434 3168 4652', CardType::masterCard);
    isInvalid('55 1168 6431 6816 8430', CardType::masterCard);
    isInvalid('629 1684 3483 1568 4683', CardType::masterCard);
    isInvalid('2201 6868 4646 8444', CardType::masterCard);
    isInvalid('9646 8166 1676 5137', CardType::masterCard);
    isInvalid('8646 8166 1676 5139', CardType::masterCard);
    isInvalid('9792 0013 8138 4354', CardType::masterCard);
    isInvalid('9792 8913 8138 4358', CardType::masterCard);
    isInvalid('6218 6843 8138 8467', CardType::masterCard);
    isInvalid('6 2166 8463 1384 6863', CardType::masterCard);
    isInvalid('62 6848 4316 8716 1443', CardType::masterCard);
    isInvalid('626 5146 8438 3138 4681', CardType::masterCard);
    isInvalid('6318 6843 8138 8466', CardType::masterCard);
    isInvalid('6221 2668 4648 6162', CardType::masterCard);
    isInvalid('6121 2568 4648 6164', CardType::masterCard);
    isInvalid('6 1166 8463 1384 6865', CardType::masterCard);
    isInvalid('61 6848 4316 8716 1444', CardType::masterCard);
    isInvalid('616 5146 8438 3138 4683', CardType::masterCard);
    isInvalid('4026 8434 8316 8683', CardType::masterCard);
    isInvalid('4 1750 0123 1838 4345', CardType::masterCard);
    isInvalid('4 4051 3834 3186 8161', CardType::masterCard);
    isInvalid('4 5086 1684 3843 1899', CardType::masterCard);
    isInvalid('4 8444 6483 1381 8683', CardType::masterCard);
    isInvalid('4 9131 6843 4351 6811', CardType::masterCard);
    isInvalid('4025 8434 8316 8684', CardType::masterCard);
    isInvalid('4 1740 0123 1838 4348', CardType::masterCard);
    isInvalid('4 4031 3834 3186 8166', CardType::masterCard);
    isInvalid('4 5076 1684 3843 1891', CardType::masterCard);
    isInvalid('4 8454 6483 1381 8680', CardType::masterCard);
    isInvalid('4 9181 6843 4351 6810', CardType::masterCard);
    isInvalid('4 5131 3813 4612', CardType::masterCard);
    isInvalid('5 5131 3813 4611', CardType::masterCard);
});
