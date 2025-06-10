<?php

namespace App\Datalayers;

use App\Models\GeoJSON;

interface ScalarValueReader
{
    /**
     * @return App\Models\ScalarDataPoint[]
     */
    public function values(GeoJSON $geometry): array;

    public function max(GeoJSON $geometry): int;

    public function min(GeoJSON $geometry): int;

    public function sum(GeoJSON $geometry): int;
}
