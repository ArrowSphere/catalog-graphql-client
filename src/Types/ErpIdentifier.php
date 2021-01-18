<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class ErpIdentifier
 */
class ErpIdentifier
{
    public const SKU = 'sku';

    /** @var string|null */
    private $sku;

    /**
     * ErpIdentifier constructor.
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
