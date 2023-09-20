<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Prices
 *
 * @method string getBuy()
 * @method string getSell()
 * @method string getPublic()
 * @method string getTransferPrice()
 * @method Prices setBuy(string $buy)
 * @method Prices setSell(string $sell)
 * @method Prices setPublic(string $public)
 * @method Prices setTransferPrice(string $transferPrice)
 */
class Prices extends AbstractType
{
    public const BUY = 'buy';

    public const SELL = 'sell';

    public const PUBLIC = 'public';

    public const TRANSFER_PRICE = 'transferPrice';

    protected const MAPPING = [
        self::BUY    => self::TYPE_STRING,
        self::SELL   => self::TYPE_STRING,
        self::PUBLIC => self::TYPE_STRING,
        self::TRANSFER_PRICE => self::TYPE_STRING,
    ];
}
