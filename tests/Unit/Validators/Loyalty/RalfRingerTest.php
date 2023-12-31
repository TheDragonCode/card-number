<?php

declare(strict_types=1);

use DragonCode\CardNumber\Enums\CardType;

it('must be an valid card number', function () {
    isValid('2000 04879 9850', CardType::ralfRinger);
    isValid('2000 04853 3820', CardType::ralfRinger);
    isValid('2000 04694 4482', CardType::ralfRinger);
    isValid('2000 04471 6841', CardType::ralfRinger);
    isValid('2000 04443 7398', CardType::ralfRinger);
    isValid('2000 04716 3777', CardType::ralfRinger);
    isValid('2000 04531 9744', CardType::ralfRinger);
    isValid('2000 04674 2225', CardType::ralfRinger);
    isValid('2000 04571 4563', CardType::ralfRinger);
    isValid('2000 04177 5709', CardType::ralfRinger);
});

it('must be an invalid card number', function () {
    isInvalid('3000 04879 9850', CardType::ralfRinger);
    isInvalid('3000 04853 3820', CardType::ralfRinger);
    isInvalid('3000 04694 4482', CardType::ralfRinger);
    isInvalid('3000 04471 6841', CardType::ralfRinger);
    isInvalid('3000 04443 7398', CardType::ralfRinger);
    isInvalid('3000 04716 3777', CardType::ralfRinger);
    isInvalid('3000 04531 9744', CardType::ralfRinger);
    isInvalid('3000 04674 2225', CardType::ralfRinger);
    isInvalid('3000 04571 4563', CardType::ralfRinger);
    isInvalid('3000 04177 5709', CardType::ralfRinger);

    isInvalid('0247 3140 4123 4566', CardType::ralfRinger);
    isInvalid('5019 1404 0123 4564', CardType::ralfRinger);

    isInvalid('4019 1404 0123 4567', CardType::ralfRinger);
    isInvalid('30 4687 9012 3452', CardType::ralfRinger);
    isInvalid('30 6687 9012 3457', CardType::ralfRinger);
    isInvalid('6011 4951 2345 6788', CardType::ralfRinger);
    isInvalid('6221 2649 5123 6787', CardType::ralfRinger);
    isInvalid('6229 2549 5123 6780', CardType::ralfRinger);
    isInvalid('5011 4951 2345 6780', CardType::ralfRinger);
    isInvalid('6004 1404 0000 1233', CardType::ralfRinger);
    isInvalid('5004 1404 0000 1235', CardType::ralfRinger);
    isInvalid('6 0628 2123 4568', CardType::ralfRinger);
    isInvalid('6062 8212 3456 7890', CardType::ralfRinger);
    isInvalid('384 1123 4567 8912 3452', CardType::ralfRinger);
    isInvalid('5 0628 2123 4569', CardType::ralfRinger);
    isInvalid('5062 8212 3456 7892', CardType::ralfRinger);
    isInvalid('284 1123 4567 8912 3453', CardType::ralfRinger);
    isInvalid('2131 1356 1381 3510', CardType::ralfRinger);
    isInvalid('1 8001 3513 8438 4382', CardType::ralfRinger);
    isInvalid('35 1868 4438 1138 4890', CardType::ralfRinger);
    isInvalid('213 1681 6843 5681 3897', CardType::ralfRinger);
    isInvalid('1131 1356 1381 3512', CardType::ralfRinger);
    isInvalid('1 7001 3513 8438 4384', CardType::ralfRinger);
    isInvalid('25 1868 4438 1138 4892', CardType::ralfRinger);
    isInvalid('212 1681 6843 5681 3898', CardType::ralfRinger);
    isInvalid('5018 6138 3377', CardType::ralfRinger);
    isInvalid('5 0568 4131 3585', CardType::ralfRinger);
    isInvalid('58 3813 5138 6813', CardType::ralfRinger);
    isInvalid('561 6816 8138 4135', CardType::ralfRinger);
    isInvalid('5036 8131 3841 6485', CardType::ralfRinger);
    isInvalid('5 6396 8434 3168 4650', CardType::ralfRinger);
    isInvalid('56 1168 6431 6816 8439', CardType::ralfRinger);
    isInvalid('639 1684 3483 1568 4681', CardType::ralfRinger);
    isInvalid('4018 6138 3370', CardType::ralfRinger);
    isInvalid('5 0168 4131 3589', CardType::ralfRinger);
    isInvalid('54 3813 5138 6817', CardType::ralfRinger);
    isInvalid('551 6816 8138 4137', CardType::ralfRinger);
    isInvalid('5016 8131 3841 6489', CardType::ralfRinger);
    isInvalid('5 5396 8434 3168 4652', CardType::ralfRinger);
    isInvalid('55 1168 6431 6816 8430', CardType::ralfRinger);
    isInvalid('629 1684 3483 1568 4683', CardType::ralfRinger);
    isInvalid('5413 5168 4131 5315', CardType::ralfRinger);
    isInvalid('2351 6843 5686 8432', CardType::ralfRinger);
    isInvalid('2229 6516 1681 3680', CardType::ralfRinger);
    isInvalid('2720 1684 6416 1843', CardType::ralfRinger);
    isInvalid('5613 5168 4131 5313', CardType::ralfRinger);
    isInvalid('2951 6843 5686 8436', CardType::ralfRinger);
    isInvalid('2929 6516 1681 3683', CardType::ralfRinger);
    isInvalid('2730 1684 6416 1841', CardType::ralfRinger);
    isInvalid('2201 6868 4646 8444', CardType::ralfRinger);
    isInvalid('2301 6868 4646 8443', CardType::ralfRinger);
    isInvalid('9646 8166 1676 5137', CardType::ralfRinger);
    isInvalid('8646 8166 1676 5139', CardType::ralfRinger);
    isInvalid('9792 0013 8138 4354', CardType::ralfRinger);
    isInvalid('9792 8913 8138 4358', CardType::ralfRinger);
    isInvalid('6218 6843 8138 8467', CardType::ralfRinger);
    isInvalid('6 2166 8463 1384 6863', CardType::ralfRinger);
    isInvalid('62 6848 4316 8716 1443', CardType::ralfRinger);
    isInvalid('626 5146 8438 3138 4681', CardType::ralfRinger);
    isInvalid('6318 6843 8138 8466', CardType::ralfRinger);
    isInvalid('6221 2668 4648 6162', CardType::ralfRinger);
    isInvalid('6121 2568 4648 6164', CardType::ralfRinger);
    isInvalid('6 1166 8463 1384 6865', CardType::ralfRinger);
    isInvalid('61 6848 4316 8716 1444', CardType::ralfRinger);
    isInvalid('616 5146 8438 3138 4683', CardType::ralfRinger);
    isInvalid('4025 8434 8316 8684', CardType::ralfRinger);
    isInvalid('4 1740 0123 1838 4348', CardType::ralfRinger);
    isInvalid('4 4031 3834 3186 8166', CardType::ralfRinger);
    isInvalid('4 5076 1684 3843 1891', CardType::ralfRinger);
    isInvalid('4 8454 6483 1381 8680', CardType::ralfRinger);
    isInvalid('4 9181 6843 4351 6810', CardType::ralfRinger);
    isInvalid('4 5131 3813 4612', CardType::ralfRinger);
    isInvalid('5 5131 3813 4611', CardType::ralfRinger);
    isInvalid('5026 8434 8316 8680', CardType::ralfRinger);
});
