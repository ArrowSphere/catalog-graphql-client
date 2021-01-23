<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Family
 *
 * @method string getId()
 * @method string getName()
 */
class Family extends AbstractType
{
    public const ID = 'id';

    public const NAME = 'name';

    protected const MAPPING = [
        self::ID   => self::TYPE_STRING,
        self::NAME => self::TYPE_STRING,
    ];
}
