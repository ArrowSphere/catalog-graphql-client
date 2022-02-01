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
 * @method Family getFamily()
 * @method PriceBandSaleConstraints getSaleConstraints()
 * @method string getOrderingType()
 * @method Uom getUom()
 * @method DynamicAttributes getDynamicAttributes()
 * @method string getName()
 * @method PriceBandAttribute[] getAttributes()
 * @method PriceBand setIsEnabled(bool $isEnabled)
 * @method PriceBand setActionFlags(PriceBandActionFlags $actionFlags)
 * @method PriceBand setBilling(Billing $billing)
 * @method PriceBand setCurrency(string $currency)
 * @method PriceBand setIdentifiers(PriceBandIdentifiers $identifiers)
 * @method PriceBand setMarketplace(string $marketplace)
 * @method PriceBand setPrices(Prices $prices)
 * @method PriceBand setFamily(Family $family)
 * @method PriceBand setSaleConstraints(PriceBandSaleConstraints $saleConstraints)
 * @method PriceBand setOrderingType(string $orderingType)
 * @method PriceBand setUom(Uom $uom)
 * @method PriceBand setDynamicAttributes(DynamicAttributes $dynamicAttributes)
 * @method PriceBand setName(string $name)
 * @method PriceBand setAttributes(PriceBandAttribute[] $attributes)
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

    public const FAMILY = 'family';

    public const SALE_CONSTRAINTS = 'saleConstraints';

    public const ORDERING_TYPE = 'orderingType';

    public const UOM = 'uom';

    public const DYNAMIC_ATTRIBUTES = 'dynamicAttributes';

    public const NAME = 'name';

    public const ATTRIBUTES = 'attributes';

    protected const MAPPING = [
        self::NAME               => self::TYPE_STRING,
        self::IS_ENABLED         => self::TYPE_BOOL,
        self::ACTION_FLAGS       => PriceBandActionFlags::class,
        self::BILLING            => Billing::class,
        self::CURRENCY           => self::TYPE_STRING,
        self::IDENTIFIERS        => PriceBandIdentifiers::class,
        self::MARKETPLACE        => self::TYPE_STRING,
        self::PRICES             => Prices::class,
        self::FAMILY             => Family::class,
        self::DYNAMIC_ATTRIBUTES => DynamicAttributes::class,
        self::SALE_CONSTRAINTS   => PriceBandSaleConstraints::class,
        self::ORDERING_TYPE      => self::TYPE_STRING,
        self::UOM                => Uom::class,
        self::ATTRIBUTES         => [
            self::MAPPING_TYPE  => PriceBandAttribute::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
