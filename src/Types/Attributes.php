<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Attributes
 */
class Attributes
{
    public const CANCEL_SUBSCRIPTION = 'cancelSubscription';

    public const DECREASE_SEATS = 'decreaseSeats';

    public const INCREASE_SEATS = 'increaseSeats';

    public const PART_IDENTIFIER = 'partIdentifier';

    public const PERIODICITY = 'periodicity';

    public const PLAN_ID = 'planId';

    public const PRODUCT_ID = 'productId';

    public const PRODUCT_SKU = 'productSku';

    public const REACTIVATE_SUBSCRIPTION = 'reactivateSubscription';

    public const SUSPEND_SUBSCRIPTION = 'suspendSubscription';

    public const TERM = 'term';

    public const UNIT_TYPE = 'unitType';

    /** @var bool|null */
    private $cancelSubscription;

    /** @var bool|null */
    private $decreaseSeats;

    /** @var bool|null */
    private $increaseSeats;

    /** @var string|null */
    private $partIdentifier;

    /** @var int|null */
    private $periodicity;

    /** @var string|null */
    private $planId;

    /** @var string|null */
    private $productId;

    /** @var string|null */
    private $productSku;

    /** @var bool|null */
    private $reactivateSubscription;

    /** @var bool|null */
    private $suspendSubscription;

    /** @var int|null */
    private $term;

    /** @var string|null */
    private $unitType;

    /**
     * Attributes constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->cancelSubscription = $data[self::CANCEL_SUBSCRIPTION] ?? null;
        $this->decreaseSeats = $data[self::DECREASE_SEATS] ?? null;
        $this->increaseSeats = $data[self::INCREASE_SEATS] ?? null;
        $this->partIdentifier = $data[self::PART_IDENTIFIER] ?? null;
        $this->periodicity = $data[self::PERIODICITY] ?? null;
        $this->planId = $data[self::PLAN_ID] ?? null;
        $this->productId = $data[self::PRODUCT_ID] ?? null;
        $this->productSku = $data[self::PRODUCT_SKU] ?? null;
        $this->reactivateSubscription = $data[self::REACTIVATE_SUBSCRIPTION] ?? null;
        $this->suspendSubscription = $data[self::SUSPEND_SUBSCRIPTION] ?? null;
        $this->term = $data[self::TERM] ?? null;
        $this->unitType = $data[self::UNIT_TYPE] ?? null;
    }

    /**
     * @return bool|null
     */
    public function getCancelSubscription(): ?bool
    {
        return $this->cancelSubscription;
    }

    /**
     * @return bool|null
     */
    public function getDecreaseSeats(): ?bool
    {
        return $this->decreaseSeats;
    }

    /**
     * @return bool|null
     */
    public function getIncreaseSeats(): ?bool
    {
        return $this->increaseSeats;
    }

    /**
     * @return string|null
     */
    public function getPartIdentifier(): ?string
    {
        return $this->partIdentifier;
    }

    /**
     * @return int|null
     */
    public function getPeriodicity(): ?int
    {
        return $this->periodicity;
    }

    /**
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }

    /**
     * @return string|null
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * @return string|null
     */
    public function getProductSku(): ?string
    {
        return $this->productSku;
    }

    /**
     * @return bool|null
     */
    public function getReactivateSubscription(): ?bool
    {
        return $this->reactivateSubscription;
    }

    /**
     * @return bool|null
     */
    public function getSuspendSubscription(): ?bool
    {
        return $this->suspendSubscription;
    }

    /**
     * @return int|null
     */
    public function getTerm(): ?int
    {
        return $this->term;
    }

    /**
     * @return string|null
     */
    public function getUnitType(): ?string
    {
        return $this->unitType;
    }
}
