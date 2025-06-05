<?php

declare(strict_types=1);

namespace App\GraphQL\Fields;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

class Sum extends Field
{
    protected $attributes = [
        'name' => 'Sum',
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::int());
    }

    public function resolve($root, array $args)
    {
        return collect($root)->map(fn ($point) => $point['value'])->sum();
    }
}
