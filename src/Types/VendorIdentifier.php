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
 * @method VendorIdentifier setName(string $name)
 * @method VendorIdentifier setFamily(string $family)
 * @method VendorIdentifier setOfferName(string $offerName)
 * @method VendorIdentifier setSku(string $sku)
 * @method VendorIdentifier setAttributes(Attributes $attributes)
 * @method VendorIdentifier setPurchasePlan(string $purchasePlan)
 */
class VendorIdentifier extends AbstractType
{
    public const NAME = 'name';

    public const FAMILY = 'family';

    public const OFFER_NAME = 'offerName';

    public const SKU = 'sku';

    public const ATTRIBUTES = 'attributes';

    public const PURCHASE_PLAN = 'purchasePlan';

    protected const MAPPING = [
        self::NAME          => self::TYPE_STRING,
        self::FAMILY        => self::TYPE_STRING,
        self::OFFER_NAME    => self::TYPE_STRING,
        self::SKU           => self::TYPE_STRING,
        self::PURCHASE_PLAN => self::TYPE_STRING,
        self::ATTRIBUTES    => Attributes::class,
    ];
}
