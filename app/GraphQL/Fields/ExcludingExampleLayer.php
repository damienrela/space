<?php

declare(strict_types=1);

namespace App\GraphQL\Fields;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

use App\Datalayers\ExampleLayer;

class ExcludingExampleLayer extends Field
{
    protected $attributes = [
        'name' => 'ExcludingExampleLayer',
    ];

    public function type(): Type
    {
        return Type::nonNull(GraphQL::type('Geometry'));
    }

    public function resolve($root, array $args)
    {
        $layer = app(ExampleLayer::class);
        return $layer->intersect($root);
    }
}
