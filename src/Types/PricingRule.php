<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PricingRule
 *
 * @method int getTier()
 * @method string getType()
 * @method string getRateType()
 * @method float getValue()
 * @method PricingRule setTier(int $tier)
 * @method PricingRule setType(string $type)
 * @method PricingRule setRateType(string $rateType)
 * @method PricingRule setValue(float $value)
 */
class PricingRule extends AbstractType
{
    public const TIER = 'tier';

    public const TYPE = 'type';

    public const RATE_TYPE = 'rateType';

    public const VALUE = 'value';

    protected const MAPPING = [
        self::TIER      => self::TYPE_INT,
        self::TYPE      => self::TYPE_STRING,
        self::RATE_TYPE => self::TYPE_STRING,
        self::VALUE     => self::TYPE_FLOAT,
    ];
}
