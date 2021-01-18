<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Pagination
 */
class Pagination
{
    public const PER_PAGE = 'perPage';

    public const CURRENT_PAGE = 'currentPage';

    public const TOTAL_PAGE = 'totalPage';

    public const TOTAL = 'total';

    /**
     * @var int|null
     */
    private $perPage;

    /**
     * @var int|null
     */
    private $currentPage;

    /**
     * @var int|null
     */
    private $totalPage;

    /**
     * @var int|null
     */
    private $total;

    /**
     * Pagination constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->perPage = $data[self::PER_PAGE] ?? null;
        $this->currentPage = $data[self::CURRENT_PAGE] ?? null;
        $this->totalPage = $data[self::TOTAL_PAGE] ?? null;
        $this->total = $data[self::TOTAL] ?? null;
    }

    /**
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * @return int|null
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * @return int|null
     */
    public function getTotalPage(): ?int
    {
        return $this->totalPage;
    }

    /**
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }
}
