<?php

declare(strict_types=1);

namespace DragonCode\CardNumber;

use DragonCode\CardNumber\Cards\AmericanExpress;
use DragonCode\CardNumber\Cards\Dankort;
use DragonCode\CardNumber\Cards\DefaultCard;
use DragonCode\CardNumber\Cards\DinersClub;
use DragonCode\CardNumber\Cards\Discovery;
use DragonCode\CardNumber\Cards\Forbrugsforeningen;
use DragonCode\CardNumber\Cards\HiperCard;
use DragonCode\CardNumber\Cards\Jcb;
use DragonCode\CardNumber\Cards\Maestro;
use DragonCode\CardNumber\Cards\MasterCard;
use DragonCode\CardNumber\Cards\Mir;
use DragonCode\CardNumber\Cards\Troy;
use DragonCode\CardNumber\Cards\UnionPay;
use DragonCode\CardNumber\Cards\Visa;
use DragonCode\CardNumber\Cards\VisaElectron;
use DragonCode\CardNumber\Enums\CardType;
use DragonCode\CardNumber\Factories\Factory;
use DragonCode\CardNumber\Formatters\DefaultFormatter;
use DragonCode\CardNumber\Formatters\Formatter;
use DragonCode\CardNumber\Services\Generator;

class CardNumber
{
    public static function isValid(int|string $number, CardType|string|null $cardType = null): bool
    {
        return match (static::detectCardType($cardType)) {
            CardType::americanExpress    => AmericanExpress::isValid($number),
            CardType::dankort            => Dankort::isValid($number),
            CardType::dinersClub         => DinersClub::isValid($number),
            CardType::discovery          => Discovery::isValid($number),
            CardType::forbrugsforeningen => Forbrugsforeningen::isValid($number),
            CardType::hiperCard          => HiperCard::isValid($number),
            CardType::jcb                => Jcb::isValid($number),
            CardType::maestro            => Maestro::isValid($number),
            CardType::masterCard         => MasterCard::isValid($number),
            CardType::mir                => Mir::isValid($number),
            CardType::troy               => Troy::isValid($number),
            CardType::unionPay           => UnionPay::isValid($number),
            CardType::visa               => Visa::isValid($number),
            CardType::visaElectron       => VisaElectron::isValid($number),
            default                      => DefaultCard::isValid($number)
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
