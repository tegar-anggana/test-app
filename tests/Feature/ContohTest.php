<?php

use Illuminate\Support\Facades\DB;

require_once 'app/helpers.php';

//uses(\Illuminate\Foundation\Testing\Refreshdatabase::class);

test('validateYesterdayDataExist returns true when yesterday data exists', function () {
    DB::table('some_table')->insert([
        'created_at' => '2025-06-29 10:00:00'
    ]);

    $today = new DateTime('2025-06-30');
    $result = validateYesterdayDataExist($today);

    expect($result)->toBeTrue();
});

test('validateYesterdayDataExist returns false when yesterday data does not exist', function () {
    $today = new DateTime('2025-06-29');
    $result = validateYesterdayDataExist($today);

    expect($result)->toBeFalse();
});
