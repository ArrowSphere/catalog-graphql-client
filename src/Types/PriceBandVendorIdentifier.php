<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandVendorIdentifier
 *
 * @method string getPurchasePlan()
 * @method string getSku()
 */
class PriceBandVendorIdentifier extends AbstractType
{
    public const PURCHASE_PLAN = 'purchasePlan';

    public const SKU = 'sku';

    protected const MAPPING = [
        self::PURCHASE_PLAN => self::TYPE_STRING,
        self::SKU           => self::TYPE_STRING,
    ];
}
