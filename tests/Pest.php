<?php

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "uses()" function to bind a different classes or traits.
|
*/

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

use DragonCode\CardNumber\CardNumber;
use DragonCode\CardNumber\Formatters\DefaultFormatter;
use DragonCode\CardNumber\Formatters\Formatter;

expect()->extend('toBeOne', fn () => $this->toBe(1));

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function isValid(int|string $number): void
{
    expect(CardNumber::isValid($number))->toBeTrue();
}

function isInvalid(int|string $number): void
{
    expect(CardNumber::isValid($number))->toBeFalse();
}

function isValidGenerated(int|string $id): void
{
    isValid(generate($id));
}

function generatedEquals(int|string $id, string $expected, Formatter $formatter = new DefaultFormatter()): void
{
    $result = generate($id, $formatter);

    expect($result)->toBeString()->toBe($expected);

    isValid($result);
}

function generate(int|string $id, Formatter $formatter = new DefaultFormatter()): string
{
    return CardNumber::generate($id, $formatter);
}
