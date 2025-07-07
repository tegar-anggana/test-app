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

describe('stopping short', function () {
    it('calculates average of positive numbers', function () {
        expect(avg([1, 2, 3]))->toBe(2.0);
    });
    it('calculates average of negative numbers', function () {
        expect(avg([-10, 20]))->toBe(5.0);
    });
    it('return 0.0 on empty list', function () {
        expect(avg([]))->toBe(0.0);
    });
});


it('calculates average with decimal numbers', function () {
    expect(avg([1.5, 2.5, 3.5]))->toBe(2.5);
});
