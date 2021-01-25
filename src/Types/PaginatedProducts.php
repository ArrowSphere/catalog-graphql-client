<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PaginatedProducts
 *
 * @method Filters[] getFilters()
 * @method Pagination getPagination()
 * @method Product[] getProducts()
 * @method Product[] getTopOffers()
 */
class PaginatedProducts extends AbstractType
{
    public const FILTERS = 'filters';

    public const PAGINATION = 'pagination';

    public const PRODUCTS = 'products';

    public const TOP_OFFERS = 'topOffers';

    protected const MAPPING = [
        self::FILTERS    => [
            self::MAPPING_TYPE  => Filters::class,
            self::MAPPING_ARRAY => true,
        ],
        self::PAGINATION => Pagination::class,
        self::PRODUCTS   => [
            self::MAPPING_TYPE  => Product::class,
            self::MAPPING_ARRAY => true,
        ],
        self::TOP_OFFERS => [
            self::MAPPING_TYPE  => Product::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
