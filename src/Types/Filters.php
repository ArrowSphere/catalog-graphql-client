<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Filters
 *
 * @method string getName()
 * @method FiltersValues[] getValue()
 */
class Filters extends AbstractType
{
    public const NAME = 'name';

    public const VALUE = 'value';

    protected const MAPPING = [
        self::NAME  => self::TYPE_STRING,
        self::VALUE => [
            self::MAPPING_TYPE  => FiltersValues::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
