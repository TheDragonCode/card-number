<?php

declare(strict_types=1);

use DragonCode\CardNumber\Enums\CardType;

it('must be an valid card number', function () {
    isValid('FFAY', CardType::chars);
    isValid('FFES', CardType::chars);
    isValid('FFKN', CardType::chars);
    isValid('FFNE', CardType::chars);
    isValid('FFOZ', CardType::chars);
    isValid('FFSX', CardType::chars);
    isValid('FFXO', CardType::chars);
    isValid('FFYK', CardType::chars);
    isValid('FFZA', CardType::chars);

    isValid('AEK-NOO', CardType::chars);
    isValid('EKN-OSX', CardType::chars);
    isValid('KNO-SXY', CardType::chars);
    isValid('NOS-XYF', CardType::chars);
    isValid('OSX-YZA', CardType::chars);
    isValid('SXY-ZFN', CardType::chars);
    isValid('XYZ-FAS', CardType::chars);
    isValid('YZF-AEZ', CardType::chars);
    isValid('ZFA-EKA', CardType::chars);

    isValid('AE-KNOS-AEKZ', CardType::chars);
    isValid('EK-NOSX-AEKF', CardType::chars);
    isValid('KN-OSXY-AEKF', CardType::chars);
    isValid('NO-SXYZ-AEKA', CardType::chars);
    isValid('OS-XYZF-AEKA', CardType::chars);
    isValid('SX-YZFA-AEKK', CardType::chars);
    isValid('XY-ZFAE-AEKN', CardType::chars);
    isValid('YZ-FAEK-AEKS', CardType::chars);
    isValid('ZF-AEKN-AEKX', CardType::chars);

    isValid('ffay', CardType::chars);
    isValid('ffes', CardType::chars);
    isValid('ffkn', CardType::chars);
    isValid('ffne', CardType::chars);
    isValid('ffoz', CardType::chars);
    isValid('ffsx', CardType::chars);
    isValid('ffxo', CardType::chars);
    isValid('ffyk', CardType::chars);
    isValid('ffza', CardType::chars);

    isValid('aek-noo', CardType::chars);
    isValid('ekn-osx', CardType::chars);
    isValid('kno-sxy', CardType::chars);
    isValid('nos-xyf', CardType::chars);
    isValid('osx-yza', CardType::chars);
    isValid('sxy-zfn', CardType::chars);
    isValid('xyz-fas', CardType::chars);
    isValid('yzf-aez', CardType::chars);
    isValid('zfa-eka', CardType::chars);

    isValid('ae-knos-aekz', CardType::chars);
    isValid('ek-nosx-aekf', CardType::chars);
    isValid('kn-osxy-aekf', CardType::chars);
    isValid('no-sxyz-aeka', CardType::chars);
    isValid('os-xyzf-aeka', CardType::chars);
    isValid('sx-yzfa-aekk', CardType::chars);
    isValid('xy-zfae-aekn', CardType::chars);
    isValid('yz-faek-aeks', CardType::chars);
    isValid('zf-aekn-aekx', CardType::chars);

    isValid('AE-34O6-AE3Z', CardType::chars);
    isValid('E3-4O6X-AE3F', CardType::chars);
    isValid('34-O6XY-AE3F', CardType::chars);
    isValid('4O-6XYZ-AE3A', CardType::chars);
    isValid('O6-XYZF-AE3A', CardType::chars);
    isValid('6X-YZFA-AE33', CardType::chars);
    isValid('XY-ZFAE-AE34', CardType::chars);
    isValid('YZ-FAE3-AE36', CardType::chars);
    isValid('ZF-AE34-AE3X', CardType::chars);
});

it('must be an invalid card number', function () {
    isInvalid('DFAY', CardType::chars);
    isInvalid('DFES', CardType::chars);
    isInvalid('DFKN', CardType::chars);
    isInvalid('DFNE', CardType::chars);
    isInvalid('DFOZ', CardType::chars);
    isInvalid('DFSX', CardType::chars);
    isInvalid('DFXO', CardType::chars);
    isInvalid('DFYK', CardType::chars);
    isInvalid('DFZA', CardType::chars);

    isInvalid('BEK-NOO', CardType::chars);
    isInvalid('BKN-OSX', CardType::chars);
    isInvalid('BNO-SXY', CardType::chars);
    isInvalid('BOS-XYF', CardType::chars);
    isInvalid('BSX-YZA', CardType::chars);
    isInvalid('BXY-ZFN', CardType::chars);
    isInvalid('BYZ-FAS', CardType::chars);
    isInvalid('BZF-AEZ', CardType::chars);
    isInvalid('BFA-EKA', CardType::chars);

    isInvalid('LE-KNOS-AEKZ', CardType::chars);
    isInvalid('LK-NOSX-AEKF', CardType::chars);
    isInvalid('LN-OSXY-AEKF', CardType::chars);
    isInvalid('LO-SXYZ-AEKA', CardType::chars);
    isInvalid('LS-XYZF-AEKA', CardType::chars);
    isInvalid('LX-YZFA-AEKK', CardType::chars);
    isInvalid('LY-ZFAE-AEKN', CardType::chars);
    isInvalid('LZ-FAEK-AEKS', CardType::chars);
    isInvalid('LF-AEKN-AEKX', CardType::chars);

    isInvalid('LE-KNOS-AEKZ');
    isInvalid('LK-NOSX-AEKF');
    isInvalid('LN-OSXY-AEKF');
    isInvalid('LO-SXYZ-AEKA');
    isInvalid('LS-XYZF-AEKA');
    isInvalid('LX-YZFA-AEKK');
    isInvalid('LY-ZFAE-AEKN');
    isInvalid('LZ-FAEK-AEKS');
    isInvalid('LF-AEKN-AEKX');
});
