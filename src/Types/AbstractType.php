<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\CatalogGraphQLClient\Exceptions\CatalogGraphQLClientException;
use ArrowSphere\CatalogGraphQLClient\Exceptions\NonExistingFieldException;
use ArrowSphere\CatalogGraphQLClient\Exceptions\UnrequestedFieldException;

/**
 * Class AbstractType
 */
abstract class AbstractType
{
    /** @var array */
    private $fields = [];

    protected const MAPPING = [];

    protected const MAPPING_TYPE = 'type';

    protected const MAPPING_ARRAY = 'array';

    protected const TYPE_STRING = 'string';

    protected const TYPE_BOOL = 'bool';

    protected const TYPE_INT = 'int';

    protected const TYPE_FLOAT = 'float';

    private const TYPES = [
        self::TYPE_STRING,
        self::TYPE_BOOL,
        self::TYPE_INT,
        self::TYPE_FLOAT,
    ];

    /**
     * @param mixed $method
     * @param mixed $params
     * @return mixed
     * @throws CatalogGraphQLClientException
     * @throws UnrequestedFieldException
     */
    public function __call($method, $params)
    {
        $prefix = strtolower(substr($method, 0, 3));
        if ($prefix !== 'get') {
            throw new CatalogGraphQLClientException(sprintf('Unknown method %s', $method));
        }

        $property = lcfirst(substr($method, 3));
        if (! array_key_exists($property, $this->fields)) {
            throw new UnrequestedFieldException(sprintf('Field %s from type %s has not been requested', $property, static::class));
        }

        return $this->fields[$property] ?? null;
    }

    /**
     * AbstractType constructor.
     *
     * @param array $data
     * @throws NonExistingFieldException
     */
    public function __construct(array $data)
    {
        array_walk($data, function ($value, string $name) {
            if (! isset(static::MAPPING[$name])) {
                throw new NonExistingFieldException(sprintf('Field %s does not exist in type %s', $name, static::class));
            }

            $definition = static::MAPPING[$name];
            $type = is_string($definition) ? $definition : $definition[self::MAPPING_TYPE];
            $isArray = is_array($definition) ? $definition[self::MAPPING_ARRAY] ?? false : false;

            $buildValue = static function($value) use ($type) {
                return in_array($type, self::TYPES, true) ? $value : new $type($value);
            };

            if ($isArray) {
                $this->fields[$name] = array_map($buildValue, $value);
            } else {
                $this->fields[$name] = $buildValue($value);
            }
        });
    }
}
