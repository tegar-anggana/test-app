<?php

require_once 'app/helpers.php';

it('returns correct sum of two positive numbers', function () {
    expect(sum(2, 3))->toBe(5);
});

it('returns correct sum when one number is negative', function () {
    expect(sum(-2, 3))->toBe(1);
});

it('returns correct sum when both numbers are zero', function () {
    expect(sum(0, 0))->toBe(0, "hasil sum(0,0) seharusnya 0");
})
    ->skip('Tes ini gagal di CI karena perbedaan versi PHP, akan diperbaiki setelah upgrade');

it('tests various sum scenarios', function () {
    expect(sum(1, 2))->toBe(3);
    expect(sum(0, 0))->toBe(0);
    expect(sum(-1, -1))->toBe(-2);
    expect(sum(100, 200))->toBe(300);
});
