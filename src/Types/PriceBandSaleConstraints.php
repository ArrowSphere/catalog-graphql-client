<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandSaleConstraints
 *
 * @method string getAvailableDate()
 * @method string getExpiryDate()
 * @method int getMinQuantity()
 * @method int getMaxQuantity()
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
