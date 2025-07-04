<?php

namespace App\Domain\Contracts;

interface IPaymentService
{
    public function pay(string $account, float $amount): bool;
}
