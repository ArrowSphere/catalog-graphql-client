<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class RelatedOffer
 *
 * @method string getSku()
 * @method string getVendor()
 */
class RelatedOffer extends AbstractType
{
    public const SKU = 'sku';

    public const VENDOR = 'vendor';

    protected const MAPPING = [
        self::SKU    => self::TYPE_STRING,
        self::VENDOR => self::TYPE_STRING,
    ];
}
