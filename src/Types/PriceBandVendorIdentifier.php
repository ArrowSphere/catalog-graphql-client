<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandVendorIdentifier
 */
class PriceBandVendorIdentifier
{
    public const PURCHASE_PLAN = 'purchasePlan';

    public const SKU = 'sku';

    /** @var string|null */
    private $purchasePlan;

    /** @var string|null */
    private $sku;

    /**
     * PriceBandVendorIdentifier constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->purchasePlan = $data[self::PURCHASE_PLAN] ?? null;
        $this->sku = $data[self::SKU] ?? null;
    }

    /**
     * @return string|null
     */
    public function getPurchasePlan(): ?string
    {
        return $this->purchasePlan;
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
}
