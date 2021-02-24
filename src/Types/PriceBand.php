<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBand
 *
 * @method bool getIsEnabled()
 * @method PriceBandActionFlags getActionFlags()
 * @method Billing getBilling()
 * @method string getCurrency()
 * @method PriceBandIdentifiers getIdentifiers()
 * @method string getMarketplace()
 * @method Prices getPrices()
 * @method PriceBandSaleConstraints getSaleConstraints()
 * @method string getOrderingType()
 * @method Uom getUom()
 * @method Uom getDynamicAttributes()
 */
class PriceBand extends AbstractType
{
    public const IS_ENABLED = 'isEnabled';

    public const ACTION_FLAGS = 'actionFlags';

    public const BILLING = 'billing';

    public const CURRENCY = 'currency';

    public const IDENTIFIERS = 'identifiers';

    public const MARKETPLACE = 'marketplace';

    public const PRICES = 'prices';

    public const SALE_CONSTRAINTS = 'saleConstraints';

    public const ORDERING_TYPE = 'orderingType';

    public const UOM = 'uom';

    public const DYNAMIC_ATTRIBUTES = 'dynamicAttributes';

    protected const MAPPING = [
        self::IS_ENABLED         => self::TYPE_BOOL,
        self::ACTION_FLAGS       => PriceBandActionFlags::class,
        self::BILLING            => Billing::class,
        self::CURRENCY           => self::TYPE_STRING,
        self::IDENTIFIERS        => PriceBandIdentifiers::class,
        self::MARKETPLACE        => self::TYPE_STRING,
        self::PRICES             => Prices::class,
        self::DYNAMIC_ATTRIBUTES => DynamicAttributes::class,
        self::SALE_CONSTRAINTS   => PriceBandSaleConstraints::class,
        self::ORDERING_TYPE      => self::TYPE_STRING,
        self::UOM                => Uom::class,
    ];
}
