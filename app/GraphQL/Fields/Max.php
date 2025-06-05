<?php

declare(strict_types=1);

namespace App\GraphQL\Fields;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Field;

class Max extends Field
{
    protected $attributes = [
        'name' => 'Max',
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::int());
    }

    public function resolve($root, array $args)
    {
        return collect($root)->map(fn ($point) => $point['value'])->max();
    }
}
