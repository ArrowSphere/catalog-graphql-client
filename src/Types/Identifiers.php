<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Identifiers
 *
 * @method ArrowsphereIdentifier getArrowsphere()
 * @method VendorIdentifier getVendor()
 * @method Identifiers setArrowsphere(ArrowsphereIdentifier $arrowsphere)
 * @method Identifiers setVendor(VendorIdentifier $vendor)
 */
class Identifiers extends AbstractType
{
    public const ARROWSPHERE = 'arrowsphere';

    public const VENDOR = 'vendor';

    protected const MAPPING = [
        self::ARROWSPHERE => ArrowsphereIdentifier::class,
        self::VENDOR      => VendorIdentifier::class,
    ];
}
