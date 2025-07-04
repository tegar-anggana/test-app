<?php

use App\Domain\Contracts\IPaymentService;
use App\Domain\Services\OrderProcessor;

it('processes payment successfully with dumb mock', function () {
    $paymentService = Mockery::mock(IPaymentService::class);

    // Mock "bodoh": diset di test
    $paymentService
        ->shouldReceive('pay')
        ->with('123', 100.0)
        ->andReturn(true); // Tidak ada logika, cuma balikin true

    $orderProcessor = new OrderProcessor($paymentService);

    expect($orderProcessor->process('123', 100.0))->toBeTrue();
});

it('processes payment conditionally with smart mock', function () {
    $paymentService = Mockery::mock(IPaymentService::class);

    $paymentService
        ->shouldReceive('pay')
        ->andReturnUsing(function ($account, $amount) {
            // 🚨 Ada logika di mock:
            return $amount < 500.0;
        });

    $orderProcessor = new OrderProcessor($paymentService);

    expect($orderProcessor->process('123', 100.0))->toBeTrue();
});
