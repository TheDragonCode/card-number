<?php

declare(strict_types=1);

use DragonCode\CardNumber\Enums\CardType;

it('must be an valid card number', function () {
    isValid('959 034 265', CardType::yvesRocher);
});

it('must be an invalid card number', function () {
    isInvalid('0247 3140 4123 4566', CardType::yvesRocher);
    isInvalid('5019 1404 0123 4564', CardType::yvesRocher);

    isInvalid('4019 1404 0123 4567', CardType::yvesRocher);
    isInvalid('30 4687 9012 3452', CardType::yvesRocher);
    isInvalid('30 6687 9012 3457', CardType::yvesRocher);
    isInvalid('6011 4951 2345 6788', CardType::yvesRocher);
    isInvalid('6221 2649 5123 6787', CardType::yvesRocher);
    isInvalid('6229 2549 5123 6780', CardType::yvesRocher);
    isInvalid('5011 4951 2345 6780', CardType::yvesRocher);
    isInvalid('6004 1404 0000 1233', CardType::yvesRocher);
    isInvalid('5004 1404 0000 1235', CardType::yvesRocher);
    isInvalid('6 0628 2123 4568', CardType::yvesRocher);
    isInvalid('6062 8212 3456 7890', CardType::yvesRocher);
    isInvalid('384 1123 4567 8912 3452', CardType::yvesRocher);
    isInvalid('5 0628 2123 4569', CardType::yvesRocher);
    isInvalid('5062 8212 3456 7892', CardType::yvesRocher);
    isInvalid('284 1123 4567 8912 3453', CardType::yvesRocher);
    isInvalid('2131 1356 1381 3510', CardType::yvesRocher);
    isInvalid('1 8001 3513 8438 4382', CardType::yvesRocher);
    isInvalid('35 1868 4438 1138 4890', CardType::yvesRocher);
    isInvalid('213 1681 6843 5681 3897', CardType::yvesRocher);
    isInvalid('1131 1356 1381 3512', CardType::yvesRocher);
    isInvalid('1 7001 3513 8438 4384', CardType::yvesRocher);
    isInvalid('25 1868 4438 1138 4892', CardType::yvesRocher);
    isInvalid('212 1681 6843 5681 3898', CardType::yvesRocher);
    isInvalid('5018 6138 3377', CardType::yvesRocher);
    isInvalid('5 0568 4131 3585', CardType::yvesRocher);
    isInvalid('58 3813 5138 6813', CardType::yvesRocher);
    isInvalid('561 6816 8138 4135', CardType::yvesRocher);
    isInvalid('5036 8131 3841 6485', CardType::yvesRocher);
    isInvalid('5 6396 8434 3168 4650', CardType::yvesRocher);
    isInvalid('56 1168 6431 6816 8439', CardType::yvesRocher);
    isInvalid('639 1684 3483 1568 4681', CardType::yvesRocher);
    isInvalid('4018 6138 3370', CardType::yvesRocher);
    isInvalid('5 0168 4131 3589', CardType::yvesRocher);
    isInvalid('54 3813 5138 6817', CardType::yvesRocher);
    isInvalid('551 6816 8138 4137', CardType::yvesRocher);
    isInvalid('5016 8131 3841 6489', CardType::yvesRocher);
    isInvalid('5 5396 8434 3168 4652', CardType::yvesRocher);
    isInvalid('55 1168 6431 6816 8430', CardType::yvesRocher);
    isInvalid('629 1684 3483 1568 4683', CardType::yvesRocher);
    isInvalid('5413 5168 4131 5315', CardType::yvesRocher);
    isInvalid('2351 6843 5686 8432', CardType::yvesRocher);
    isInvalid('2229 6516 1681 3680', CardType::yvesRocher);
    isInvalid('2720 1684 6416 1843', CardType::yvesRocher);
    isInvalid('5613 5168 4131 5313', CardType::yvesRocher);
    isInvalid('2951 6843 5686 8436', CardType::yvesRocher);
    isInvalid('2929 6516 1681 3683', CardType::yvesRocher);
    isInvalid('2730 1684 6416 1841', CardType::yvesRocher);
    isInvalid('2201 6868 4646 8444', CardType::yvesRocher);
    isInvalid('2301 6868 4646 8443', CardType::yvesRocher);
    isInvalid('9646 8166 1676 5137', CardType::yvesRocher);
    isInvalid('8646 8166 1676 5139', CardType::yvesRocher);
    isInvalid('9792 0013 8138 4354', CardType::yvesRocher);
    isInvalid('9792 8913 8138 4358', CardType::yvesRocher);
    isInvalid('6218 6843 8138 8467', CardType::yvesRocher);
    isInvalid('6 2166 8463 1384 6863', CardType::yvesRocher);
    isInvalid('62 6848 4316 8716 1443', CardType::yvesRocher);
    isInvalid('626 5146 8438 3138 4681', CardType::yvesRocher);
    isInvalid('6318 6843 8138 8466', CardType::yvesRocher);
    isInvalid('6221 2668 4648 6162', CardType::yvesRocher);
    isInvalid('6121 2568 4648 6164', CardType::yvesRocher);
    isInvalid('6 1166 8463 1384 6865', CardType::yvesRocher);
    isInvalid('61 6848 4316 8716 1444', CardType::yvesRocher);
    isInvalid('616 5146 8438 3138 4683', CardType::yvesRocher);
    isInvalid('4025 8434 8316 8684', CardType::yvesRocher);
    isInvalid('4 1740 0123 1838 4348', CardType::yvesRocher);
    isInvalid('4 4031 3834 3186 8166', CardType::yvesRocher);
    isInvalid('4 5076 1684 3843 1891', CardType::yvesRocher);
    isInvalid('4 8454 6483 1381 8680', CardType::yvesRocher);
    isInvalid('4 9181 6843 4351 6810', CardType::yvesRocher);
    isInvalid('4 5131 3813 4612', CardType::yvesRocher);
    isInvalid('5 5131 3813 4611', CardType::yvesRocher);
    isInvalid('5026 8434 8316 8680', CardType::yvesRocher);
});
