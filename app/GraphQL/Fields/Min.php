<?php

declare(strict_types=1);

namespace App\GraphQL\Fields;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

class Min extends Field
{
    protected $attributes = [
        'name' => 'Min',
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::int());
    }

    public function resolve($root, array $args)
    {
        return $root->datalayerReader->min($root->geoJSON);
    }
}
