<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Prices
 *
 * @method string getBuy()
 * @method string getSell()
 * @method string getPublic()
 */
class Prices extends AbstractType
{
    public const BUY = 'buy';

    public const SELL = 'sell';

    public const PUBLIC = 'public';

    protected const MAPPING = [
        self::BUY    => self::TYPE_STRING,
        self::SELL   => self::TYPE_STRING,
        self::PUBLIC => self::TYPE_STRING,
    ];
}
