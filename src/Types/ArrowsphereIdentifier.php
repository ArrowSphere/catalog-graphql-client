<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class ArrowsphereIdentifier
 */
class ArrowsphereIdentifier
{
    public const SKU = 'sku';

    public const SKU_XSP = 'skuXsp';

    public const SKU_XAC = 'skuXac';

    public const ORDERABLE_SKU = 'orderableSku';

    /** @var string|null */
    private $sku;

    /** @var string|null */
    private $skuXsp;

    /** @var string|null */
    private $skuXac;

    /** @var string|null */
    private $orderableSku;

    /**
     * ArrowsphereIdentifier constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->sku = $data[self::SKU] ?? null;
        $this->skuXsp = $data[self::SKU_XSP] ?? null;
        $this->skuXac = $data[self::SKU_XAC] ?? null;
        $this->orderableSku = $data[self::ORDERABLE_SKU] ?? null;
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @return string|null
     */
    public function getSkuXsp(): ?string
    {
        return $this->skuXsp;
    }

    /**
     * @return string|null
     */
    public function getSkuXac(): ?string
    {
        return $this->skuXac;
    }

    /**
     * @return string|null
     */
    public function getOrderableSku(): ?string
    {
        return $this->orderableSku;
    }
}
