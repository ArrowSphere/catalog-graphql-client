<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Filters
 *
 * @method string getName()
 * @method FiltersValues[] getValues()
 * @method Filters setName(string $name)
 * @method Filters setValues(FiltersValues[] $values)
 */
class Filters extends AbstractType
{
    public const NAME = 'name';

    public const VALUES = 'values';

    protected const MAPPING = [
        self::NAME  => self::TYPE_STRING,
        self::VALUES => [
            self::MAPPING_TYPE  => FiltersValues::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
