<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandAttribute
 *
 * @method string getName()
 * @method string getValue()
 * @method self setName(string $name)
 * @method self setValue(string $value)
 */
class PriceBandAttribute extends AbstractType
{
    public const NAME = 'name';

    public const VALUE = 'value';

    protected const MAPPING = [
        self::NAME  => self::TYPE_STRING,
        self::VALUE => self::TYPE_STRING,
    ];
}
