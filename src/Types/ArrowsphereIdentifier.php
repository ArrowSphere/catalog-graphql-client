<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class ArrowsphereIdentifier
 *
 * @method string getSku()
 * @method string getSkuXac()
 * @method string getSkuXsp()
 * @method string getOrderableSku()
 * @method ArrowsphereIdentifier setSku(string $sku)
 * @method ArrowsphereIdentifier setSkuXac(string $skuXac)
 * @method ArrowsphereIdentifier setSkuXsp(string $skuXsp)
 * @method ArrowsphereIdentifier setOrderableSku(string $orderableSku)
 */
class ArrowsphereIdentifier extends AbstractType
{
    public const SKU = 'sku';

    public const SKU_XAC = 'skuXac';

    public const SKU_XSP = 'skuXsp';

    public const ORDERABLE_SKU = 'orderableSku';

    protected const MAPPING = [
        self::SKU           => self::TYPE_STRING,
        self::SKU_XAC       => self::TYPE_STRING,
        self::SKU_XSP       => self::TYPE_STRING,
        self::ORDERABLE_SKU => self::TYPE_STRING,
    ];
}
