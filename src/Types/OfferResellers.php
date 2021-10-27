<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class OfferResellers
 *
 * @method Reseller getOwner()
 * @method Reseller[] getViewers()
 * @method OfferResellers setOwner(Reseller $reseller)
 * @method OfferResellers setViewers(Reseller[] $resellers)
 */
class OfferResellers extends AbstractType
{
    public const OWNER = 'owner';

    public const VIEWERS = 'viewers';

    public const MAPPING = [
        self::OWNER => Reseller::class,
        self::VIEWERS => [
            self::MAPPING_TYPE  => Reseller::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
