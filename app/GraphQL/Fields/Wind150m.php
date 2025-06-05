<?php

declare(strict_types=1);

namespace App\GraphQL\Fields;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

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
        // TODO: fetch data against the wind layer
        return [
            [
                'coordinates' => [1,2],
                'value' => 3,
            ],
            [
                'coordinates' => [5,6],
                'value' => 7,
            ]
        ];
    }
}
