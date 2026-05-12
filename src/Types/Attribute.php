<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Attribute
 *
 * @method string getName()
 * @method string getValue()
 * @method Attribute setName(string $name)
 * @method Attribute setValue(string $value)
 */
class Attribute extends AbstractType
{
    public const NAME = 'name';

    public const VALUE = 'value';

    protected const MAPPING = [
        self::NAME  => self::TYPE_STRING,
        self::VALUE => self::TYPE_STRING,
    ];
}
