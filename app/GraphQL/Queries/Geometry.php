<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

use App\GraphQL\Type\Geometry as GeometryType;

class Geometry extends Query
{
    protected $attributes = [
        'name' => 'geometry',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::nonNull(GraphQL::type('Geometry'));
    }

    public function args(): array
    {
        return [
            'geoJSON' => [
                'name' => 'geoJSON',
                'type' => Type::nonNull(GraphQL::type('GeoJSON'))
            ]

        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        /** @var SelectFields $fields */
        $fields = $getSelectFields();
        $select = $fields->getSelect();
        $with = $fields->getRelations();

        return $args;
    }
}
