<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

use App\GraphQL\Fields;

class GeometryNumericData extends GraphQLType
{
    protected $attributes = [
        'name' => 'GeometryNumericData',
        'description' => 'number'
    ];

    public function fields(): array
    {
        return [
            'points' => new Fields\Points,
            'sum' => new Fields\Sum,
            'max' => new Fields\Max,
            'min' => new Fields\Min,
        ];
    }
}
