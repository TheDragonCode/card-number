# Card Number using Luhn's algorithm

![Luhn-algorithm card-number](https://preview.dragon-code.pro/Luhn's-algorithm/card-number.svg?brand=php&preposition=with)

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

CardNumber::isValid(18); // true
CardNumber::isValid(12); // false

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

You can also check for invalid numbers:
```php
use DragonCode\CardNumber\CardNumber;

CardNumber::isInvalid(18); // false
CardNumber::isInvalid(12); // true

CardNumber::isInvalid('0018'); // false
CardNumber::isInvalid('0019'); // true

CardNumber::isInvalid('123-455'); // false
CardNumber::isInvalid('123-454'); // true

CardNumber::isInvalid('12-3456-1239'); // false
CardNumber::isInvalid('12-3456-1230'); // true

CardNumber::isInvalid('5580 4733 7202 4733'); // false
CardNumber::isInvalid('5580 4733 7202 4732'); // true

CardNumber::isInvalid('5580-4733x7202_47 33'); // false
CardNumber::isInvalid('5580-4733x7202_47 32'); // true
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
use DragonCode\CardNumber\Formatters\BankFormatter;
use DragonCode\CardNumber\Formatters\LoyaltyFormatter;

$loyalty = LoyaltyFormatter::create();
$bank    = BankFormatter::create();
 
CardNumber::generate(1, $loyalty); // 0018
CardNumber::generate(2, $loyalty); // 0026

CardNumber::generate(12345, $loyalty); // 123-455
CardNumber::generate(23456, $loyalty); // 234-567

CardNumber::generate(123456, $loyalty); // 123-4566
CardNumber::generate(234567, $loyalty); // 234-5676

CardNumber::generate(123456123, $loyalty); // 12-3456-1239
CardNumber::generate(234567123, $loyalty); // 23-4567-1230

CardNumber::generate(558047337202473, $bank); // 5580 4733 7202 4733
CardNumber::generate(529391143678555, $bank); // 5293 9114 3678 5557
```

### Formatters

You can also create your own formatter.
To do this, create a class and inherit it from the `DragonCode\CardNumber\Formatters\Formatter` abstract class:

```php
use DragonCode\CardNumber\Formatters\Formatter;

class SomeFormatter extends Formatter
{
    protected int $splitLength = 6;

    protected string $delimiter = '/';
}
```

And use this one:

```php
use App\Cards\Formatters\SomeFormatter;
use DragonCode\CardNumber\CardNumber;

$formatter = SomeFormatter::create();

CardNumber::generate(558047337202473, $formatter); // 5580/473372/024733
```

> List of available formatters:
> * `DragonCode\CardNumber\Formatters\DefaultFormatter`
> * `DragonCode\CardNumber\Formatters\BankFormatter`
> * `DragonCode\CardNumber\Formatters\LoyaltyFormatter`

### Factories

In addition, you can specify factories as an incoming identifier parameter.
In this way, you can form unique identification rules using fluent methods.

This is useful when, for example, you create a customer loyalty card number and want to specify in its number the year
of issue as well as its level.

```php
use DragonCode\CardNumber\CardNumber;
use DragonCode\CardNumber\Factories\CustomerFactory;
use DragonCode\CardNumber\Formatters\LoyaltyFormatter;

$formatter = LoyaltyFormatter::create();

$customer = CustomerFactory::create()->level($user->loyalty_level)->customer($user->id);

return CardNumber::generate($customer, $formatter);
// For example, 230-4001-2348
//
//     23     - year
//     04     - loyalty level
//     001234 - user id
//     8      - control digit
```

```php
use DragonCode\CardNumber\CardNumber;
use DragonCode\CardNumber\Factories\BankFactory;
use DragonCode\CardNumber\Formatters\BankFormatter;

$formatter = BankFormatter::create();

$customer = BankFactory::create()->paymentType(3)->bank(12, 45, 75)->client(12345);

return CardNumber::generate($customer, $formatter);
// 3012 4575 0012 3452
//
// 3       - payment type
// 012     - bank ID
// 45      - bank info
// 75      - bank's program
// 0012345 - client id
// 2       - control digit
```

> List of available factories:
> * `DragonCode\CardNumber\Factories\BankFactory`
> * `DragonCode\CardNumber\Factories\CustomerFactory`

### Laravel

If you use the Laravel framework, you can also use the validation rule:

```php
use DragonCode\CardNumber\Laravel\Validation\Rules\CardNumberRule;
use Illuminate\Foundation\Http\FormRequest;

class SomeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'card_number' => ['required', new CardNumberRule()]
        ];
    }
}
```

## License

This package is licensed under the [MIT License](LICENSE).


[badge_downloads]:  https://img.shields.io/packagist/dt/dragon-code/card-number.svg?style=flat-square

[badge_license]:    https://img.shields.io/badge/license-MIT-green?style=flat-square

[badge_stable]:     https://img.shields.io/github/v/release/TheDragonCode/card-number?label=stable&style=flat-square

[badge_unstable]:   https://img.shields.io/badge/unstable-dev--main-orange?style=flat-square

[link_license]:     LICENSE

[link_packagist]:   https://packagist.org/packages/dragon-code/card-number
