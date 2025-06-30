<?php

use App\Infrastructure\Persistence\SomeTableRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('yesterdayDataExists returns true when data exists', function () {
    DB::table('some_table')->insert([
        'created_at' => '2025-06-29 10:00:00'
    ]);

    $repo = new SomeTableRepository();
    $date = new DateTime('2025-06-30');
    $result = $repo->yesterdayDataExists($date);

    expect($result)->toBeTrue();
});

test('validateYesterdayDataExist returns false when yesterday data does not exist', function () {
    $repo = new SomeTableRepository();
    $today = new DateTime('2025-06-29');
    $result = $repo->yesterdayDataExists($today);

    expect($result)->toBeFalse();
});
