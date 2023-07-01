<?php

declare(strict_types=1);

use DragonCode\CardNumber\Enums\CardType;
use DragonCode\CardNumber\Laravel\Validation\Rules\CardNumberRule;

it('must be a valid any number', function () {
    validateRule(CardNumberRule::class, '4026 8434 8316 8683');
    validateRule(CardNumberRule::class, '2131 1356 1381 3510');

    expect(true)->toBeTrue();
});

it('must be a valid card number rule', function () {
    validateRule(CardNumberRule::class, '4026 8434 8316 8683', CardType::visa);
    validateRule(CardNumberRule::class, '4026 8434 8316 8683', 'visa');

    validateRule(CardNumberRule::class, '2131 1356 1381 3510', CardType::jcb);
    validateRule(CardNumberRule::class, '2131 1356 1381 3510', 'jcb');

    validateRule(CardNumberRule::class, '4026 8434 8316 8683', [CardType::visa, CardType::jcb]);
    validateRule(CardNumberRule::class, '4026 8434 8316 8683', ['visa', 'jcb']);

    validateRule(CardNumberRule::class, '2131 1356 1381 3510', [CardType::visa, CardType::jcb]);
    validateRule(CardNumberRule::class, '2131 1356 1381 3510', ['visa', 'jcb']);

    expect(true)->toBeTrue();
});

it('must be a invalid card number with enum', function () {
    expect(
        fn () => validateRule(CardNumberRule::class, '2131 1356 1381 3510', CardType::visa)
    )->toThrow(Exception::class, 'The :attribute field must be a valid card number.');
});

it('must be a invalid card number with string', function () {
    expect(
        fn () => validateRule(CardNumberRule::class, '2131 1356 1381 3510', 'visa')
    )->toThrow(Exception::class, 'The :attribute field must be a valid card number.');
});

it('should check for the valid card type', function () {
    expect(
        fn () => validateRule(CardNumberRule::class, '2131 1356 1381 3510', 'qwerty')
    )->toThrow(
        Exception::class,
        'The :attribute field must contain a card number of one of the following types: :types.'
    );
});
