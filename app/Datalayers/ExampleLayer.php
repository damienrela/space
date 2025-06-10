<?php

namespace App\Datalayers;

use App\Models\GeoJSON;
use App\Models\ScalarDataPoint;

class ExampleLayer implements GeometryIntersector, ScalarValueReader {

    // GeometryIntersector
    public function intersect(GeoJSON $geometry): GeoJSON
    {
        return new GeoJSON('{"example": "geojson"}');
    }

    // ScalarValueReader
    public function values(GeoJSON $geometry): array
    {
        return [
            new ScalarDataPoint(coordinates: [1, 2], value: 1),
            new ScalarDataPoint(coordinates: [2, 3], value: 1),
            new ScalarDataPoint(coordinates: [3, 4], value: 2),
            new ScalarDataPoint(coordinates: [4, 1], value: 6),
        ];
    }

    public function max(GeoJSON $geometry): int
    {
        return collect($this->values($geometry))->max('value');
    }

    public function min(GeoJSON $geometry): int
    {
        return collect($this->values($geometry))->min('value');
    }

    public function sum(GeoJSON $geometry): int
    {
        return collect($this->values($geometry))->sum('value');
    }
}
