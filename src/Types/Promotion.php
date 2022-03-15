<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Promotion
 *
 * @method string getPromotionId()
 * @method string getVendorSku()
 * @method string getName()
 * @method string getDescription()
 * @method float getPricingValue()
 * @method string getPricingType()
 * @method string getPromotionType()
 * @method string getMarketplace()
 * @method string getStartDate()
 * @method string getEndDate()
 * @method bool getIsAutoApplicable()
 * @method int getMinQuantity()
 * @method int getMaxQuantity()
 * @method Billing getBilling()
 *
 * @method Promotion setPromotionId(string $promotionId)
 * @method Promotion setVendorSku(string $vendorSku)
 * @method Promotion setName(string $name)
 * @method Promotion setDescription(string $description)
 * @method Promotion setPricingValue(float $pricingValue)
 * @method Promotion setPricingType(string $pricingType)
 * @method Promotion setPromotionType(string $promotionType)
 * @method Promotion setMarketplace(string $marketplace)
 * @method Promotion setStartDate(string $startDate)
 * @method Promotion setEndDate(string $endDate)
 * @method Promotion setIsAutoApplicable(bool $isAutoApplicable)
 * @method Promotion setMinQuantity(int $minQuantity)
 * @method Promotion setMaxQuantity(int $maxQuantity)
 * @method Promotion setBilling(Billing $billing)
 */
class Promotion extends AbstractType
{
    public const PROMOTION_ID = 'promotionId';

    public const VENDOR_SKU = 'vendorSku';

    public const NAME = 'name';

    public const DESCRIPTION = 'description';

    public const PRICING_VALUE = 'pricingValue';

    public const PRICING_TYPE = 'pricingType';

    public const PROMOTION_TYPE = 'promotionType';

    public const MARKETPLACE = 'marketplace';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const IS_AUTO_APPLICABLE = 'isAutoApplicable';

    public const MIN_QUANTITY = 'minQuantity';

    public const MAX_QUANTITY = 'maxQuantity';

    public const BILLING = 'billing';

    protected const MAPPING = [
        self::PROMOTION_ID         => self::TYPE_STRING,
        self::VENDOR_SKU           => self::TYPE_STRING,
        self::NAME                 => self::TYPE_STRING,
        self::DESCRIPTION          => self::TYPE_STRING,
        self::PRICING_VALUE        => self::TYPE_FLOAT,
        self::PRICING_TYPE         => self::TYPE_STRING,
        self::PROMOTION_TYPE       => self::TYPE_STRING,
        self::MARKETPLACE          => self::TYPE_STRING,
        self::START_DATE           => self::TYPE_STRING,
        self::END_DATE             => self::TYPE_STRING,
        self::IS_AUTO_APPLICABLE   => self::TYPE_BOOL,
        self::MIN_QUANTITY         => self::TYPE_INT,
        self::MAX_QUANTITY         => self::TYPE_INT,
        self::BILLING              => Billing::class,
    ];
}
