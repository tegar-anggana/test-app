<?php

use App\Domain\Services\DataValidator;
use App\Domain\Contracts\SomeTableRepositoryInterface;

beforeEach(function () {
    $this->mockRepo = Mockery::mock(SomeTableRepositoryInterface::class);
    $this->validator = new DataValidator($this->mockRepo);
});

it('should return true when yesterday data exists', function () {
    $today = new DateTime('2024-01-02');

    $this->mockRepo
        ->shouldReceive('yesterdayDataExists')
        ->with($today)
        ->once()
        ->andReturn(true);

    $result = $this->validator->validateYesterdayDataExist($today);

    expect($result)->toBeTrue();
});

it('should return false when yesterday data does not exist', function () {
    $today = new DateTime('2024-01-02');

    $this->mockRepo
        ->shouldReceive('yesterdayDataExists')
        ->with($today)
        ->once()
        ->andReturn(false);

    $result = $this->validator->validateYesterdayDataExist($today);

    expect($result)->toBeFalse();
});

it('should pass correct DateTime parameter to repository', function () {
    $today = new DateTime('2024-01-02');

    $this->mockRepo
        ->shouldReceive('yesterdayDataExists')
        ->with(Mockery::on(function ($arg) use ($today) {
            return $arg instanceof DateTime &&
                $arg->format('Y-m-d') === $today->format('Y-m-d');
        }))
        ->once()
        ->andReturn(true);

    $this->validator->validateYesterdayDataExist($today);
});
