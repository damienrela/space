<?php

namespace App\Datalayers;

use App\Models\GeoJSON;

interface GeometryIntersector
{
    public function intersect(GeoJSON $geometry): GeoJSON;
}
