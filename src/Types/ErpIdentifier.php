<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class ErpIdentifier
 *
 * @method string getSku()
 */
class ErpIdentifier extends AbstractType
{
    public const SKU = 'sku';

    protected const MAPPING = [
        self::SKU => self::TYPE_STRING,
    ];
}
