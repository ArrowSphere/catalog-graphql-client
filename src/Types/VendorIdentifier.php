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
 * @method string getPurchasePlan()
 */
class VendorIdentifier extends AbstractType
{
    public const NAME = 'name';

    public const FAMILY = 'family';

    public const OFFER_NAME = 'offerName';

    public const SKU = 'sku';

    public const ATTRIBUTES = 'attributes';

    public const PURCHASE_PLAN = 'PurchasePlan';

    protected const MAPPING = [
        self::NAME          => self::TYPE_STRING,
        self::FAMILY        => self::TYPE_STRING,
        self::OFFER_NAME    => self::TYPE_STRING,
        self::SKU           => self::TYPE_STRING,
        self::PURCHASE_PLAN => self::TYPE_STRING,
        self::ATTRIBUTES    => Attributes::class,
    ];
}
