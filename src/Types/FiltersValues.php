<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class FiltersValues
 *
 * @method string getValue()
 * @method int getCount()
 */
class FiltersValues extends AbstractType
{
    public const VALUE = 'value';

    public const COUNT = 'count';

    protected const MAPPING = [
        self::VALUE => self::TYPE_STRING,
        self::COUNT => self::TYPE_INT
    ];
}
