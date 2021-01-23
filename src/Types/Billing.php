<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Billing
 *
 * @method int getCycle()
 * @method int getTerm()
 * @method string getType()
 */
class Billing extends AbstractType
{
    public const CYCLE = 'cycle';

    public const TERM = 'term';

    public const TYPE = 'type';

    protected const MAPPING = [
        self::CYCLE => self::TYPE_INT,
        self::TERM  => self::TYPE_INT,
        self::TYPE  => self::TYPE_STRING,
    ];
}
