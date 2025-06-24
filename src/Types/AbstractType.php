<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\CatalogGraphQLClient\Exceptions\CatalogGraphQLClientException;
use ArrowSphere\CatalogGraphQLClient\Exceptions\UnrequestedFieldException;
use JsonSerializable;

/**
 * Class AbstractType
 */
abstract class AbstractType implements JsonSerializable
{
    /**
     * This property holds the fields of the current object.
     *
     * @var array
     */
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
     * Magic method to provide the getters and setters.
     *
     * @param mixed $method
     * @param mixed $params
     *
     * @return mixed
     *
     * @throws CatalogGraphQLClientException
     * @throws UnrequestedFieldException
     */
    public function __call($method, $params)
    {
        $prefix = strtolower(substr($method, 0, 3));
        if (! in_array($prefix, ['get', 'set'])) {
            throw new CatalogGraphQLClientException(sprintf('Unknown method %s', $method));
        }

        $property = lcfirst(substr($method, 3));

        if ($prefix === 'get') {
            if (! array_key_exists($property, $this->fields)) {
                throw new UnrequestedFieldException(sprintf('Field %s from type %s has not been requested', $property, static::class));
            }

            return $this->fields[$property] ?? null;
        }
        $this->fields[$property] = $params[0];

        return $this;
    }

    /**
     * AbstractType constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        array_walk($data, function ($value, string $name) {
            if (! isset(static::MAPPING[$name])) {
                return;
            }

            $definition = static::MAPPING[$name];
            $type = is_string($definition) ? $definition : $definition[self::MAPPING_TYPE];
            $isArray = is_array($definition) && ($definition[self::MAPPING_ARRAY] ?? false);

            $buildValue = static function ($value) use ($type) {
                return in_array($type, self::TYPES, true) || $value === null ? $value : new $type($value ?? []);
            };

            if ($isArray) {
                $this->fields[$name] = array_map($buildValue, $value ?? []);
            } else {
                $this->fields[$name] = $buildValue($value);
            }
        });
    }

    /**
     * Indicates which field must be returned when using json_encode with an instance of this class.
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [];

        foreach ($this->fields as $name => $value) {
            if ($value instanceof JsonSerializable) {
                $data[$name] = $value->jsonSerialize();
            } elseif (is_array($value)) {
                $data[$name] = array_map(static function ($subValue) {
                    return $subValue instanceof JsonSerializable ? $subValue->jsonSerialize() : $subValue;
                }, $value);
            } else {
                $data[$name] = $value;
            }
        }

        return $data;
    }
}
