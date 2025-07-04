<?php

use App\Domain\Contracts\IReader;

it('should fail to call read and show mock name', function () {
    $mock = Mockery::mock(IReader::class);
    $mock->shouldReceive('read')
        ->once()
        ->andReturn(7);
});


