<?php

declare(strict_types=1);

namespace DragonCode\CardNumber;

use DragonCode\CardNumber\Enums\CardType;
use DragonCode\CardNumber\Factories\Factory;
use DragonCode\CardNumber\Formatters\DefaultFormatter;
use DragonCode\CardNumber\Formatters\Formatter;
use DragonCode\CardNumber\Services\Generator;
use DragonCode\CardNumber\Validators\Banks\AmericanExpress;
use DragonCode\CardNumber\Validators\Banks\Dankort;
use DragonCode\CardNumber\Validators\Banks\DinersClub;
use DragonCode\CardNumber\Validators\Banks\Discovery;
use DragonCode\CardNumber\Validators\Banks\Forbrugsforeningen;
use DragonCode\CardNumber\Validators\Banks\HiperCardValidator;
use DragonCode\CardNumber\Validators\Banks\Jcb;
use DragonCode\CardNumber\Validators\Banks\Maestro;
use DragonCode\CardNumber\Validators\Banks\MasterCardValidator;
use DragonCode\CardNumber\Validators\Banks\Mir;
use DragonCode\CardNumber\Validators\Banks\Troy;
use DragonCode\CardNumber\Validators\Banks\UnionPay;
use DragonCode\CardNumber\Validators\Banks\Visa;
use DragonCode\CardNumber\Validators\Banks\VisaElectron;
use DragonCode\CardNumber\Validators\CardValidator;
use DragonCode\CardNumber\Validators\DefaultCardValidator;
use DragonCode\CardNumber\Validators\Loyalty\Chars;
use DragonCode\CardNumber\Validators\Loyalty\RalfRinger;
use DragonCode\CardNumber\Validators\Loyalty\YvesRocher;

use function is_a;

class CardNumber
{
    public static function isValid(int|string $number, CardType|string|null $cardType = null): bool
    {
        if (is_a($cardType, CardValidator::class, true)) {
            return $cardType::isValid($number);
        }

        return match (static::detectCardType($cardType)) {
            CardType::americanExpress    => AmericanExpress::isValid($number),
            CardType::chars              => Chars::isValid($number),
            CardType::dankort            => Dankort::isValid($number),
            CardType::dinersClub         => DinersClub::isValid($number),
            CardType::discovery          => Discovery::isValid($number),
            CardType::forbrugsforeningen => Forbrugsforeningen::isValid($number),
            CardType::hiperCard          => HiperCardValidator::isValid($number),
            CardType::jcb                => Jcb::isValid($number),
            CardType::maestro            => Maestro::isValid($number),
            CardType::masterCard         => MasterCardValidator::isValid($number),
            CardType::mir                => Mir::isValid($number),
            CardType::ralfRinger         => RalfRinger::isValid($number),
            CardType::troy               => Troy::isValid($number),
            CardType::unionPay           => UnionPay::isValid($number),
            CardType::visa               => Visa::isValid($number),
            CardType::visaElectron       => VisaElectron::isValid($number),
            CardType::yvesRocher         => YvesRocher::isValid($number),
            default                      => DefaultCardValidator::isValid($number)
        };
    }

    public static function isInvalid(int|string $number, CardType|string|null $cardType = null): bool
    {
        return ! static::isValid($number, $cardType);
    }

    public static function generate(Factory|int|string $id, Formatter $formatter = new DefaultFormatter()): string
    {
        return (new Generator($id, $formatter))->generate();
    }

    protected static function detectCardType(CardType|string|null $type): ?CardType
    {
        if (! empty($type)) {
            return $type instanceof CardType ? $type : CardType::tryFrom($type);
        }

        return null;
    }
}
