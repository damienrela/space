<?php

declare(strict_types=1);

namespace App\GraphQL\Scalars;

use Exception;
use GraphQL\Error\Error;
use GraphQL\Language\AST\Node;
use GraphQL\Type\Definition\ScalarType;
use GraphQL\Type\Definition\Type;
use GraphQL\Language\AST\StringValueNode;
use Rebing\GraphQL\Support\Contracts\TypeConvertible;
use App\Models\GeoJson as GeoObject;


class GeoJSON extends ScalarType implements TypeConvertible
{
    /**
     * @var string
     */
    public string $name = 'GeoJSON';

    /**
     * @var string
     */
    public ?string $description = '';

    /**
     * Serializes an internal value to include in a response.
     *
     * @param mixed $value
     *
     * @return mixed
     *
     * @throws Error
     */
    public function serialize($value)
    {
        return $value->toJson();
    }

    /**
     * Parses an externally provided value (query variable) to use as an input.
     *
     * In the case of an invalid value this method must throw an Exception
     *
     * @param mixed $value
     *
     * @return mixed
     *
     * @throws Error
     */
    public function parseValue($value)
    {
        return new GeoObject($value);
    }

    /**
     * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input.
     *
     * In the case of an invalid node or value this method must throw an Exception
     *
     * @param Node $valueNode
     * @param mixed[]|null $variables
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function parseLiteral($valueNode, ?array $variables = null)
    {
        if (!$valueNode instanceof StringValueNode) {
            throw new Error('Query error: Can only parse strings got: ' . $valueNode->kind, [$valueNode]);
        }

        $geoJson = new GeoObject($valueNode->value);

        if (!$geoJson->validate()) {
            throw new Error('Query error: Can only parse valid GeoJSON: ' . $valueNode->kind, [$valueNode]);
        }

        return $geoJson;
    }

    public function toType(): Type
    {
        return new static();
    }
}
