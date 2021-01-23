<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandIdentifiers
 *
 * @method PriceBandArrowsphereIdentifier getArrowsphere()
 * @method ErpIdentifier getErp()
 * @method VendorIdentifier getVendor()
 */
class PriceBandIdentifiers extends AbstractType
{
    public const ARROWSPHERE = 'arrowsphere';

    public const ERP = 'erp';

    public const VENDOR = 'vendor';

    protected const MAPPING = [
        self::ARROWSPHERE => PriceBandArrowsphereIdentifier::class,
        self::ERP         => ErpIdentifier::class,
        self::VENDOR      => VendorIdentifier::class,
    ];
}
