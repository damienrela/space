<?php

declare(strict_types=1);

namespace App\GraphQL\Fields;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

class ExcludingWaterways extends Field
{
    protected $attributes = [
        'name' => 'ExcludingWaterways',
    ];

    public function type(): Type
    {
        return Type::nonNull(GraphQL::type('Geometry'));
    }

    public function resolve($root, array $args)
    {
        // TODO: Add exclusion filering here
        return $root;
    }
}
