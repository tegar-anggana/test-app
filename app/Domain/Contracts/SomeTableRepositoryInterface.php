<?php

namespace App\Domain\Contracts;

use DateTime;

interface SomeTableRepositoryInterface {
    public function yesterdayDataExists(DateTime $date): bool;
}

