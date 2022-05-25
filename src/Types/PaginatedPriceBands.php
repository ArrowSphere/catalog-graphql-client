<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PaginatedPriceBands
 *
 * @method Filters[] getFilters()
 * @method Pagination getPagination()
 * @method PriceBand[] getPriceBands()
 * @method Family[] getFamilies()
 * @method PaginatedProducts setFilters(Filters[] $filters)
 * @method PaginatedProducts setPagination(Pagination $pagination)
 * @method PaginatedProducts setPriceBands(PriceBand[] $priceBands)
 * @method PaginatedProducts setFamilies(Family[] $families)
 */
class PaginatedPriceBands extends AbstractType
{
    public const FAMILIES = 'families';

    public const FILTERS = 'filters';

    public const PAGINATION = 'pagination';

    public const PRICE_BANDS = 'priceBands';

    protected const MAPPING = [
        self::FAMILIES => [
            self::MAPPING_TYPE  => Family::class,
            self::MAPPING_ARRAY => true,
        ],
        self::FILTERS    => [
            self::MAPPING_TYPE  => Filters::class,
            self::MAPPING_ARRAY => true,
        ],
        self::PAGINATION => Pagination::class,
        self::PRICE_BANDS   => [
            self::MAPPING_TYPE  => PriceBand::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
