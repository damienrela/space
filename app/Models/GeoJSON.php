<?php

namespace App\Models;

class GeoJSON {
    public function __construct(private string $geoJson)
    {
    }

    public function toJson(): string
    {
        return $this->geoJson;
    }

    public function __toString(): string
    {
        return $this->toJson();
    }

    public function validate(): bool
    {
        // TODO: Improve validation
        return json_validate($this->geoJson);
    }
}
