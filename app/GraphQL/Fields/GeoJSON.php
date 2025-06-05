<?php

declare(strict_types=1);

namespace App\GraphQL\Fields;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

class GeoJSON extends Field
{
    protected $attributes = [
        'name' => 'GeoJSON',
    ];

    public function type(): Type
    {
        return Type::nonNull(GraphQL::type('GeoJSON'));
    }

    public function resolve($root, array $args)
    {
        return $root['geoJSON'];
    }
}
