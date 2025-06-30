<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Contracts\SomeTableRepositoryInterface;
use DateTime;
use Illuminate\Support\Facades\DB;

class SomeTableRepository implements SomeTableRepositoryInterface
{
    public function yesterdayDataExists(DateTime $date): bool
    {
        $yesterday = (clone $date)->modify('-1 day');
        return DB::table('some_table')
            ->whereDate('created_at', $yesterday->format('Y-m-d'))
            ->exists();
    }
}
