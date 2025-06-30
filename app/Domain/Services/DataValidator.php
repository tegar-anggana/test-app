<?php

namespace App\Domain\Services;

use App\Domain\Contracts\SomeTableRepositoryInterface;
use DateTime;

class DataValidator
{
    public function __construct(private SomeTableRepositoryInterface $repo) {}

    public function validateYesterdayDataExist(DateTime $today): bool
    {
        return $this->repo->yesterdayDataExists($today);
    }
}
