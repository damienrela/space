<?php

declare(strict_types=1);

namespace App\GraphQL\Fields;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

class Points extends Field
{
    protected $attributes = [
        'name' => 'Points',
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::listOf(Type::nonNull(GraphQL::type('NumericPoint'))));
    }

    public function resolve($root, array $args)
    {
        return $root;
    }
}
