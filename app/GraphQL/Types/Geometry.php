<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

use App\GraphQL\Fields\GeoJSON;
use App\GraphQL\Fields\ExcludingWind150m;

class Geometry extends GraphQLType
{
    protected $attributes = [
        'name' => 'Geometry',
        'description' => 'A Geometry represents space'
    ];

    public function fields(): array
    {
        return [
            'geoJson' => new GeoJSON,
            'excludingWind150m' => new ExcludingWind150m,
        ];
    }
}
