<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Pagination
 *
 * @method int getPerPage()
 * @method int getCurrentPage()
 * @method int getTotalPage()
 * @method int getTotal()
 * @method Pagination setPerPage(int $perPage)
 * @method Pagination setCurrentPage(int $currentPage)
 * @method Pagination setTotalPage(int $totalPage)
 * @method Pagination setTotal(int $total)
 */
class Pagination extends AbstractType
{
    public const PER_PAGE = 'perPage';

    public const CURRENT_PAGE = 'currentPage';

    public const TOTAL_PAGE = 'totalPage';

    public const TOTAL = 'total';

    protected const MAPPING = [
        self::PER_PAGE     => self::TYPE_INT,
        self::CURRENT_PAGE => self::TYPE_INT,
        self::TOTAL_PAGE   => self::TYPE_INT,
        self::TOTAL        => self::TYPE_INT,
    ];
}
