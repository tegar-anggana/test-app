<?php

namespace App\Domain\Services;

use App\Domain\Contracts\IPaymentService;

class OrderProcessor
{
    protected IPaymentService $paymentService;

    public function __construct(IPaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function process(string $account, float $amount): bool
    {
        return $this->paymentService->pay($account, $amount);
    }
}
