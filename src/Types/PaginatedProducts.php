<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PaginatedProducts
 */
class PaginatedProducts
{
    public const FILTERS = 'filters';

    public const PAGINATION = 'pagination';

    public const PRODUCTS = 'products';

    public const TOP_OFFERS = 'topOffers';

    /** @var Filters[]|null */
    private $filters;

    /** @var Pagination|null */
    private $pagination;

    /** @var Product[]|null */
    private $products;

    /** @var Product[]|null */
    private $topOffers;

    /**
     * PaginatedProducts constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->filters = isset($data[self::FILTERS]) ? array_map(static function (array $filter) {
            return new Filters($filter);
        }, $data[self::FILTERS]) : null;

        $this->pagination = isset($data[self::PAGINATION]) ? new Pagination($data[self::PAGINATION]) : null;

        $this->products = isset($data[self::PRODUCTS]) ? array_map(static function (array $product) {
            return new Product($product);
        }, $data[self::PRODUCTS]) : null;

        $this->topOffers = isset($data[self::TOP_OFFERS]) ? array_map(static function (array $product) {
            return new Product($product);
        }, $data[self::TOP_OFFERS]) : null;
    }

    /**
     * @return Filters[]|null
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /**
     * @return Pagination|null
     */
    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }

    /**
     * @return Product[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @return Product[]|null
     */
    public function getTopOffers(): ?array
    {
        return $this->topOffers;
    }
}
