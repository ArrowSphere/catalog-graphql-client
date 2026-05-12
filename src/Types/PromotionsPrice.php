<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PromotionsPrice
 *
 * @method string getPromotionId()
 * @method Prices getPrices()
 * @method string getVendorSku()
 * @method string getMarketplace()
 * @method string getName()
 * @method string getDescription()
 * @method bool getIsAutoApplicable()
 * @method string getStartDate()
 * @method string getEndDate()
 * @method string getPromotionType()
 * @method string getPricingType()
 * @method float getPricingValue()
 * @method int getMinQuantity()
 * @method int getMaxQuantity()
 * @method string getCurrency()
 * @method string getApplicableUntil()
 * @method int getApplicableFor()
 * @method bool getCheckEligibility()
 * @method Attribute[] getAttributes()
 * @method PromotionsPrice setPromotionId(string $promotionId)
 * @method PromotionsPrice setPrices(Prices $prices)
 * @method PromotionsPrice setVendorSku(string $vendorSku)
 * @method PromotionsPrice setMarketplace(string $marketplace)
 * @method PromotionsPrice setName(string $name)
 * @method PromotionsPrice setDescription(string $description)
 * @method PromotionsPrice setIsAutoApplicable(bool $isAutoApplicable)
 * @method PromotionsPrice setStartDate(string $startDate)
 * @method PromotionsPrice setEndDate(string $endDate)
 * @method PromotionsPrice setPromotionType(string $promotionType)
 * @method PromotionsPrice setPricingType(string $pricingType)
 * @method PromotionsPrice setPricingValue(float $pricingValue)
 * @method PromotionsPrice setMinQuantity(int $minQuantity)
 * @method PromotionsPrice setMaxQuantity(int $maxQuantity)
 * @method PromotionsPrice setCurrency(string $currency)
 * @method PromotionsPrice setApplicableUntil(string $applicableUntil)
 * @method PromotionsPrice setApplicableFor(int $applicableFor)
 * @method PromotionsPrice setCheckEligibility(bool $checkEligibility)
 * @method PromotionsPrice setAttributes(Attribute[] $attributes)
 */
class PromotionsPrice extends AbstractType
{
    public const PROMOTION_ID = 'promotionId';

    public const PRICES = 'prices';

    public const VENDOR_SKU = 'vendorSku';

    public const MARKETPLACE = 'marketplace';

    public const NAME = 'name';

    public const DESCRIPTION = 'description';

    public const IS_AUTO_APPLICABLE = 'isAutoApplicable';

    public const START_DATE = 'startDate';

    public const END_DATE = 'endDate';

    public const PROMOTION_TYPE = 'promotionType';

    public const PRICING_TYPE = 'pricingType';

    public const PRICING_VALUE = 'pricingValue';

    public const MIN_QUANTITY = 'minQuantity';

    public const MAX_QUANTITY = 'maxQuantity';

    public const CURRENCY = 'currency';

    public const APPLICABLE_UNTIL = 'applicableUntil';

    public const APPLICABLE_FOR = 'applicableFor';

    public const CHECK_ELIGIBILITY = 'checkEligibility';

    public const ATTRIBUTES = 'attributes';

    protected const MAPPING = [
        self::PROMOTION_ID       => self::TYPE_STRING,
        self::PRICES             => Prices::class,
        self::VENDOR_SKU         => self::TYPE_STRING,
        self::MARKETPLACE        => self::TYPE_STRING,
        self::NAME               => self::TYPE_STRING,
        self::DESCRIPTION        => self::TYPE_STRING,
        self::IS_AUTO_APPLICABLE => self::TYPE_BOOL,
        self::START_DATE         => self::TYPE_STRING,
        self::END_DATE           => self::TYPE_STRING,
        self::PROMOTION_TYPE     => self::TYPE_STRING,
        self::PRICING_TYPE       => self::TYPE_STRING,
        self::PRICING_VALUE      => self::TYPE_FLOAT,
        self::MIN_QUANTITY       => self::TYPE_INT,
        self::MAX_QUANTITY       => self::TYPE_INT,
        self::CURRENCY           => self::TYPE_STRING,
        self::APPLICABLE_UNTIL   => self::TYPE_STRING,
        self::APPLICABLE_FOR     => self::TYPE_INT,
        self::CHECK_ELIGIBILITY  => self::TYPE_BOOL,
        self::ATTRIBUTES         => [
            self::MAPPING_TYPE  => Attribute::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
