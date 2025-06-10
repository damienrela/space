<?php

declare(strict_types=1);

namespace App\GraphQL\Fields;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

use App\Models\GeometricValues;

class Wind150m extends Field
{
    protected $attributes = [
        'name' => 'Wind150m',
    ];

    public function type(): Type
    {
        return Type::nonNull(GraphQL::type('GeometryNumericData'));
    }

    public function resolve($root, array $args)
    {
        return new GeometricValues(
            $root, // Geojson
            app('datalayers.example')
        );
    }
}
