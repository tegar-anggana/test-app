<?php

namespace App\Domain\Services;

use App\Domain\Contracts\SomeTableRepositoryInterface;
use DateTime;

class DataValidator
{
    public function __construct(private SomeTableRepositoryInterface $repo) {}

    public function validateYesterdayDataExist(DateTime $today): bool
    {
        $yesterday = (clone $today)->modify('-1 day');
        return $this->repo->yesterdayDataExists($yesterday);
    }
}
