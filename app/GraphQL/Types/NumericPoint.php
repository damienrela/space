<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

use App\GraphQL\Fields;

class NumericPoint extends GraphQLType
{
    protected $attributes = [
        'name' => 'NumericPoint',
        'description' => 'number'
    ];

    public function fields(): array
    {
        return [
            'coordinates' => [
                'type' => Type::nonNull(
                    Type::listOf(
                        Type::nonNull(
                            Type::int()
                        )
                    )
                ),
                '[x, y] coordinates'
            ],
            'value' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The numeric value stored at the point',
            ]
        ];
    }
}
