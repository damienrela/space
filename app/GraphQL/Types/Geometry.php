<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

use App\GraphQL\Fields;

class Geometry extends GraphQLType
{
    protected $attributes = [
        'name' => 'Geometry',
        'description' => 'A Geometry represents space'
    ];

    public function fields(): array
    {
        return [
            'geoJson' => new Fields\GeoJSON,
            'excludingWind150m' => new Fields\ExcludingWind150m,
            'excludingWaterways' => new Fields\ExcludingWaterways,
            'wind150m' => new Fields\Wind150m,
        ];
    }
}
