<?php

declare(strict_types=1);

use Tests\Fixtures\Validators\CustomValidator;

it('must be an valid card number', function () {
    isValid(3459, CustomValidator::class);
    isValid(3541, CustomValidator::class);
    isValid(4358, CustomValidator::class);
    isValid(4531, CustomValidator::class);
    isValid(5439, CustomValidator::class);
    isValid(5348, CustomValidator::class);
    isValid(3335, CustomValidator::class);
    isValid(4440, CustomValidator::class);
    isValid(5553, CustomValidator::class);
});

it('must be an invalid card number', function () {
    isInvalid(2451, CustomValidator::class);
    isInvalid(2543, CustomValidator::class);
    isInvalid(2352, CustomValidator::class);
    isInvalid(2535, CustomValidator::class);
    isInvalid(2436, CustomValidator::class);
    isInvalid(2345, CustomValidator::class);
    isInvalid(2337, CustomValidator::class);
    isInvalid(2444, CustomValidator::class);
    isInvalid(2550, CustomValidator::class);

    isInvalid(34546, CustomValidator::class);
    isInvalid(35444, CustomValidator::class);
    isInvalid(43547, CustomValidator::class);
    isInvalid(45344, CustomValidator::class);
    isInvalid(54346, CustomValidator::class);
    isInvalid(53447, CustomValidator::class);
    isInvalid(33340, CustomValidator::class);
    isInvalid(44446, CustomValidator::class);
    isInvalid(55541, CustomValidator::class);
});
