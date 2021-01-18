<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandArrowsphereIdentifier
 */
class PriceBandArrowsphereIdentifier
{
    public const SKU = 'sku';

    /** @var string|null */
    private $sku;

    /**
     * PriceBandArrowsphereIdentifier constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->sku = $data[self::SKU] ?? null;
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }
}
