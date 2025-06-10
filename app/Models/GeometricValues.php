<?php

namespace App\Models;

use App\Datalayers\ScalarValueReader;

class GeometricValues {
    public function __construct(public GeoJSON $geoJSON, public ScalarValueReader $datalayerReader) {}
}
