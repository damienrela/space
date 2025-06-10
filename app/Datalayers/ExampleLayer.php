<?php

namespace App\Datalayers;

use App\Models\GeoJSON;

class ExampleLayer implements GeometryIntersector {

    public function intersect(GeoJSON $geometry): GeoJSON
    {
        return $geometry;
    }
}
