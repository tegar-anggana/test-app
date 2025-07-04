<?php

namespace App\Domain\Contracts;

interface IReader {
    public function read(): int;
}
