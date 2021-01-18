<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandIdentifiers
 */
class PriceBandIdentifiers
{
    public const ARROWSPHERE = 'arrowsphere';

    public const ERP = 'erp';

    public const VENDOR = 'vendor';

    /** @var PriceBandArrowsphereIdentifier|null */
    private $arrowsphere;

    /** @var ErpIdentifier|null */
    private $erp;

    /** @var VendorIdentifier|null */
    private $vendor;

    /**
     * PriceBandIdentifiers constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->arrowsphere = isset($data[self::ARROWSPHERE]) ? new PriceBandArrowsphereIdentifier($data[self::ARROWSPHERE]) : null;
        $this->erp = isset($data[self::ERP]) ? new ErpIdentifier($data[self::ERP]) : null;
        $this->vendor = isset($data[self::VENDOR]) ? new VendorIdentifier($data[self::VENDOR]) : null;
    }

    /**
     * @return PriceBandArrowsphereIdentifier|null
     */
    public function getArrowsphere(): ?PriceBandArrowsphereIdentifier
    {
        return $this->arrowsphere;
    }

    /**
     * @return ErpIdentifier|null
     */
    public function getErp(): ?ErpIdentifier
    {
        return $this->erp;
    }

    /**
     * @return VendorIdentifier|null
     */
    public function getVendor(): ?VendorIdentifier
    {
        return $this->vendor;
    }
}
