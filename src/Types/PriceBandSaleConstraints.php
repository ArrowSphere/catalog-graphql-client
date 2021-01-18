<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandSaleConstraints
 */
class PriceBandSaleConstraints
{
    public const AVAILABLE_DATE = 'availableDate';

    public const EXPIRY_DATE = 'expiryDate';

    public const MIN_QUANTITY = 'minQuantity';

    public const MAX_QUANTITY = 'maxQuantity';

    /** @var string|null */
    private $availableDate;

    /** @var string|null */
    private $expiryDate;

    /** @var int|null */
    private $minQuantity;

    /** @var int|null */
    private $maxQuantity;

    /**
     * PriceBandSaleConstraints constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->availableDate = $data[self::AVAILABLE_DATE] ?? null;
        $this->expiryDate = $data[self::EXPIRY_DATE] ?? null;
        $this->minQuantity = $data[self::MIN_QUANTITY] ?? null;
        $this->maxQuantity = $data[self::MAX_QUANTITY] ?? null;
    }

    /**
     * @return string|null
     */
    public function getAvailableDate(): ?string
    {
        return $this->availableDate;
    }

    /**
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    /**
     * @return int|null
     */
    public function getMinQuantity(): ?int
    {
        return $this->minQuantity;
    }

    /**
     * @return int|null
     */
    public function getMaxQuantity(): ?int
    {
        return $this->maxQuantity;
    }
}
