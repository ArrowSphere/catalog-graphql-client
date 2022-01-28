<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Entry
 *
 * @method string getName()
 * @method string getDescription()
 * @method float getPricingValue()
 * @method string getPricingType()
 * @method string getPromotionType()
 * @method string getMarketplace()
 * @method string getStartDate()
 * @method string getEndDate()
 * @method Billing getBilling()
 * @method Entry setName(string $name)
 * @method Entry setDescription(string $description)
 * @method Entry setPricingValue(float $pricingValue)
 * @method Entry setPricingType(string $pricingType)
 * @method Entry setPromotionType(string $promotionType)
 * @method Entry setMarketplace(string $marketplace)
 * @method Entry setStartDate(string $startDate)
 * @method Entry setEndDate(string $endDate)
 * @method Entry setBilling(Billing $billing)
 */
class Entry extends AbstractType
{
    public const NAME = 'name';

    public const DESCRIPTION = 'description';

    public const PRICING_VALUE = 'pricingValue';

    public const PRICING_TYPE = 'pricingType';

    public const PROMOTION_TYPE = 'promotionType';

    public const MARKETPLACE = 'marketplace';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const BILLING = 'billing';

    protected const MAPPING = [
        self::NAME           => self::TYPE_STRING,
        self::DESCRIPTION    => self::TYPE_STRING,
        self::PRICING_VALUE  => self::TYPE_FLOAT,
        self::PRICING_TYPE   => self::TYPE_STRING,
        self::PROMOTION_TYPE => self::TYPE_STRING,
        self::MARKETPLACE    => self::TYPE_STRING,
        self::START_DATE     => self::TYPE_STRING,
        self::END_DATE       => self::TYPE_STRING,
        self::BILLING        => Billing::class,
    ];
}
