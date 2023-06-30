# Card Number using Luhn's algorithm

![Luhn-algorithm card-number](https://preview.dragon-code.pro/Luhn-algorithm/card-number.svg?brand=php&preposition=with)

[![Stable Version][badge_stable]][link_packagist]
[![Unstable Version][badge_unstable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![License][badge_license]][link_license]

## Introduction

Generation and verification of card numbers using Luhn's algorithm: credit, customer loyalty and others.

## Installation

To get the latest version of `Card Number`, simply require the project using [Composer](https://getcomposer.org):

```bash
composer require dragon-code/card-number
```

Or manually update `require` block of `composer.json` and run `composer update` console command.

```json
{
    "require": {
        "dragon-code/card-number": "^1.0"
    }
}
```

## Usage

### Validation

You can validate any numbers with the Luhn algorithm with any input format.

For example:

```php
use DragonCode\CardNumber\CardNumber;

CardNumber::isValid(12); // false
CardNumber::isValid(18); // true

CardNumber::isValid('0018'); // true
CardNumber::isValid('0019'); // false

CardNumber::isValid('123-455'); // true
CardNumber::isValid('123-454'); // false

CardNumber::isValid('12-3456-1239'); // true
CardNumber::isValid('12-3456-1230'); // false

CardNumber::isValid('5580 4733 7202 4733'); // true
CardNumber::isValid('5580 4733 7202 4732'); // false

CardNumber::isValid('5580-4733x7202_47 33'); // true
CardNumber::isValid('5580-4733x7202_47 32'); // false
```

### Generation

You can also easily generate any numbers using the Luhn algorithm:

```php
use DragonCode\CardNumber\CardNumber;

CardNumber::generate(1);   // 18
CardNumber::generate(2);   // 26
CardNumber::generate(10);  // 109
CardNumber::generate(90);  // 901
CardNumber::generate(908); // 9084
```

You can also use the formatter to format the resulting value:

```php
use DragonCode\CardNumber\CardNumber;
use DragonCode\CardNumber\Formatters\LoyaltyFormatter;

$formatter = new LoyaltyFormatter();

CardNumber::generate(1, $formatter); // 0018
CardNumber::generate(2, $formatter); // 0026

CardNumber::generate(12345, $formatter); // 123-455
CardNumber::generate(23456, $formatter); // 234-567

CardNumber::generate(123456, $formatter); // 123-4566
CardNumber::generate(234567, $formatter); // 234-5676

CardNumber::generate(123456123, $formatter); // 12-3456-1239
CardNumber::generate(234567123, $formatter); // 23-4567-1230
```

## License

This package is licensed under the [MIT License](LICENSE).


[badge_downloads]:  https://img.shields.io/packagist/dt/dragon-code/card-number.svg?style=flat-square

[badge_license]:    https://img.shields.io/badge/license-MIT-green?style=flat-square

[badge_stable]:     https://img.shields.io/github/v/release/TheDragonCode/card-number?label=stable&style=flat-square

[badge_unstable]:   https://img.shields.io/badge/unstable-dev--main-orange?style=flat-square

[link_license]:     LICENSE

[link_packagist]:   https://packagist.org/packages/dragon-code/card-number
