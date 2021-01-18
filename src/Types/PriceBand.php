<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBand
 */
class PriceBand
{
    public const IS_ENABLED = 'isEnabled';

    public const ACTION_FLAGS = 'actionFlags';

    public const BILLING = 'billing';

    public const CURRENCY = 'currency';

    public const IDENTIFIERS = 'identifiers';

    public const MARKETPLACE = 'marketplace';

    public const PRICES = 'prices';

    public const SALE_CONSTRAINTS = 'saleConstraints';

    public const ORDERING_TYPE = 'orderingType';

    public const UOM = 'uom';

    /** @var bool|null */
    private $isEnabled;

    /** @var ActionFlags|null */
    private $actionFlags;

    /** @var Billing|null */
    private $billing;

    /** @var string|null */
    private $currency;

    /** @var PriceBandIdentifiers|null */
    private $identifiers;

    /** @var string|null */
    private $marketplace;

    /** @var Prices|null */
    private $prices;

    /** @var PriceBandSaleConstraints|null */
    private $saleConstraints;

    /** @var string|null */
    private $orderingType;

    /** @var Uom|null */
    private $uom;

    /**
     * PriceBand constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->isEnabled = $data[self::IS_ENABLED] ?? null;
        $this->actionFlags = isset($data[self::ACTION_FLAGS]) ? new ActionFlags($data[self::ACTION_FLAGS]) : null;
        $this->billing = isset($data[self::BILLING]) ? new Billing($data[self::BILLING]) : null;
        $this->currency = $data[self::CURRENCY] ?? null;
        $this->identifiers = isset($data[self::IDENTIFIERS]) ? new PriceBandIdentifiers($data[self::IDENTIFIERS]) : null;
        $this->marketplace = $data[self::MARKETPLACE] ?? null;
        $this->prices = isset($data[self::PRICES]) ? new Prices($data[self::PRICES]) : null;
        $this->saleConstraints = isset($data[self::SALE_CONSTRAINTS]) ? new PriceBandSaleConstraints($data[self::SALE_CONSTRAINTS]) : null;
        $this->orderingType = $data[self::ORDERING_TYPE] ?? null;
        $this->uom = isset($data[self::UOM]) ? new Uom($data[self::UOM]) : null;
    }

    /**
     * @return bool|null
     */
    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    /**
     * @return ActionFlags|null
     */
    public function getActionFlags(): ?ActionFlags
    {
        return $this->actionFlags;
    }

    /**
     * @return Billing|null
     */
    public function getBilling(): ?Billing
    {
        return $this->billing;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @return PriceBandIdentifiers|null
     */
    public function getIdentifiers(): ?PriceBandIdentifiers
    {
        return $this->identifiers;
    }

    /**
     * @return string|null
     */
    public function getMarketplace(): ?string
    {
        return $this->marketplace;
    }

    /**
     * @return Prices|null
     */
    public function getPrices(): ?Prices
    {
        return $this->prices;
    }

    /**
     * @return PriceBandSaleConstraints|null
     */
    public function getSaleConstraints(): ?PriceBandSaleConstraints
    {
        return $this->saleConstraints;
    }

    /**
     * @return string|null
     */
    public function getOrderingType(): ?string
    {
        return $this->orderingType;
    }

    /**
     * @return Uom|null
     */
    public function getUom(): ?Uom
    {
        return $this->uom;
    }
}
