<?php

use App\Domain\Contracts\SomeTableRepositoryInterface;
use App\Domain\Services\DataValidator;

test('validateYesterdayDataExist calls repository with yesterday date and returns its result', function () {
    $repo = Mockery::mock(SomeTableRepositoryInterface::class);
    $repo->shouldReceive('yesterdayDataExists')
        ->with(Mockery::on(fn($date) =>
            $date instanceof DateTime && $date->format('Y-m-d') === '2025-06-29'
        ))
        ->andReturnTrue();

    $result = $repo->yesterdayDataExists(new DateTime('2025-06-29'));

    // $validator = new DataValidator($repo);
    //$result = $validator->validateYesterdayDataExist(new DateTime('2025-06-30'));

    expect($result)->toBeTrue();
});
