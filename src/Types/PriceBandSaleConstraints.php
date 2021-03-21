<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandSaleConstraints
 *
 * @method string getAvailableDate()
 * @method string getExpiryDate()
 * @method int getMinQuantity()
 * @method int getMaxQuantity()
 * @method PriceBandSaleConstraints setAvailableDate(string $availableDate)
 * @method PriceBandSaleConstraints setExpiryDate(string $expiryDate)
 * @method PriceBandSaleConstraints setMinQuantity(int $minQuantity)
 * @method PriceBandSaleConstraints setMaxQuantity(int $maxQuantity)
 */
class PriceBandSaleConstraints extends AbstractType
{
    public const AVAILABLE_DATE = 'availableDate';

    public const EXPIRY_DATE = 'expiryDate';

    public const MIN_QUANTITY = 'minQuantity';

    public const MAX_QUANTITY = 'maxQuantity';

    protected const MAPPING = [
        self::AVAILABLE_DATE => self::TYPE_STRING,
        self::EXPIRY_DATE    => self::TYPE_STRING,
        self::MIN_QUANTITY   => self::TYPE_INT,
        self::MAX_QUANTITY   => self::TYPE_INT,
    ];
}
