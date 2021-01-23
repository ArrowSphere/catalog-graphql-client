<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class VendorIdentifier
 *
 * @method string getName()
 * @method string getFamily()
 * @method string getOfferName()
 * @method string getSku()
 * @method Attributes getAttributes()
 */
class VendorIdentifier extends AbstractType
{
    public const NAME = 'name';

    public const FAMILY = 'family';

    public const OFFER_NAME = 'offerName';

    public const SKU = 'sku';

    public const ATTRIBUTES = 'attributes';

    protected const MAPPING = [
        self::NAME       => self::TYPE_STRING,
        self::FAMILY     => self::TYPE_STRING,
        self::OFFER_NAME => self::TYPE_STRING,
        self::SKU        => self::TYPE_STRING,
        self::ATTRIBUTES => Attributes::class,
    ];
}
