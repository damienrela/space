<?php

namespace App\Models;

class ScalarDataPoint {
    public function __construct(public array $coordinates, public int $value) {}
}
