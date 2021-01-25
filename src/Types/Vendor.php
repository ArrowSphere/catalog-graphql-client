<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Vendor
 *
 * @method string getName()
 */
class Vendor extends AbstractType
{
    public const NAME = 'name';

    protected const MAPPING = [
        self::NAME => self::TYPE_STRING,
    ];
}
