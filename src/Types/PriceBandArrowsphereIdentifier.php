<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandArrowsphereIdentifier
 *
 * @method string getSku()
 */
class PriceBandArrowsphereIdentifier extends AbstractType
{
    public const SKU = 'sku';

    protected const MAPPING = [
        self::SKU => self::TYPE_STRING,
    ];
}
