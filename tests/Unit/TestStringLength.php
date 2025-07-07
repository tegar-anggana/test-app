<?php

require_once 'app/helpers.php';

it('validateStringLength return true ketika input length > 3', function () {
    $result = validateStringLength('Makan');
    expect($result)->toBeTrue();
});

it('validateStringLength return false ketika input length <= 3', function () {
    $result = validateStringLength('Ma');
    expect($result)->toBeFalse();
});

it('return false ketika input length == 3', function () {
    $result = validateStringLength('Mak');
    expect($result)->toBeFalse();
});

it('validate integer range > 5', function (){
    $result = isIntegerInRange(5);
    expect($result)->toBeTrue();
});
