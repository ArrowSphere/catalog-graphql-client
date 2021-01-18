<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Identifiers
 */
class Identifiers
{
    public const ARROWSPHERE = 'arrowsphere';

    public const VENDOR = 'vendor';

    /** @var ArrowsphereIdentifier|null */
    private $arrowsphere;

    /** @var VendorIdentifier|null */
    private $vendor;

    /**
     * Identifiers constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->arrowsphere = isset($data[self::ARROWSPHERE]) ? new ArrowsphereIdentifier($data[self::ARROWSPHERE]) : null;
        $this->vendor = isset($data[self::VENDOR]) ? new VendorIdentifier($data[self::VENDOR]) : null;
    }

    /**
     * @return ArrowsphereIdentifier|null
     */
    public function getArrowsphere(): ?ArrowsphereIdentifier
    {
        return $this->arrowsphere;
    }

    /**
     * @return VendorIdentifier|null
     */
    public function getVendor(): ?VendorIdentifier
    {
        return $this->vendor;
    }
}
