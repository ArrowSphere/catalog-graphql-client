<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class VendorIdentifier
 */
class VendorIdentifier
{
    public const NAME = 'name';

    public const FAMILY = 'family';

    public const OFFER_NAME = 'offerName';

    public const SKU = 'sku';

    public const ATTRIBUTES = 'attributes';

    /** @var string|null */
    private $name;

    /** @var string|null */
    private $family;

    /** @var string|null */
    private $offerName;

    /** @var string|null */
    private $sku;

    /** @var Attributes|null */
    private $attributes;

    /**
     * VendorIdentifier constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->name = $data[self::NAME] ?? null;
        $this->family = $data[self::FAMILY] ?? null;
        $this->offerName = $data[self::OFFER_NAME] ?? null;
        $this->sku = $data[self::SKU] ?? null;
        $this->attributes = isset($data[self::ATTRIBUTES]) ? new Attributes($data[self::ATTRIBUTES]) : null;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getFamily(): ?string
    {
        return $this->family;
    }

    /**
     * @return string|null
     */
    public function getOfferName(): ?string
    {
        return $this->offerName;
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @return Attributes|null
     */
    public function getAttributes(): ?Attributes
    {
        return $this->attributes;
    }
}
