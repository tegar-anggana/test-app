<?php

use Illuminate\Support\Facades\DB;

function validateYesterdayDataExist(DateTime $today): bool
{
    $yesterday = (clone $today)->modify('-1 day');

    return DB::table('some_table')
        ->whereDate('created_at', $yesterday->format('Y-m-d'))
        ->exists();
}

function validateStringLength(string $input): bool
{
    return strlen($input) > 3;
}

function sum(int $a, int $b): int
{
    return $a + $b;
}

function avg(array $nums): float {
    return array_sum($nums) / count($nums);
}
