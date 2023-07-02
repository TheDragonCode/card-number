<?php

declare(strict_types=1);

namespace DragonCode\CardNumber\Enums;

use ArchTech\Enums\Values;

enum CardType: string
{
    use Values;

    case americanExpress    = 'amex';
    case chars              = 'chars';
    case dankort            = 'dankort';
    case dinersClub         = 'dinersclub';
    case discovery          = 'discovery';
    case forbrugsforeningen = 'forbrugsforeningen';
    case hiperCard          = 'hipercard';
    case jcb                = 'jcb';
    case maestro            = 'maestro';
    case masterCard         = 'mastercard';
    case mir                = 'mir';
    case ralfRinger         = 'ralfringer';
    case troy               = 'troy';
    case unionPay           = 'unionpay';
    case visa               = 'visa';
    case visaElectron       = 'visaelectron';
    case yvesRocher         = 'yvesrocher';
}
