<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;

use App\GraphQL\Fields\GeoJSON;

class Geometry extends GraphQLType
{
    protected $attributes = [
        'name' => 'Geometry',
        'description' => 'A Geometry represents space'
    ];

    public function fields(): array
    {
        return [
            'geoJson' => new GeoJSON
        ];
    }
}
