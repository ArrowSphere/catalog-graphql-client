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

    /** @var mixed|null */
    private $cancelSubscription;

    /** @var mixed|null */
    private $decreaseSeats;

    /** @var mixed|null */
    private $increaseSeats;

    /** @var mixed|null */
    private $partIdentifier;

    /** @var mixed|null */
    private $periodicity;

    /** @var mixed|null */
    private $planId;

    /** @var mixed|null */
    private $productId;

    /** @var mixed|null */
    private $productSku;

    /** @var mixed|null */
    private $reactivateSubscription;

    /** @var mixed|null */
    private $suspendSubscription;

    /** @var mixed|null */
    private $term;

    /** @var mixed|null */
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
     * @return mixed|null
     */
    public function getCancelSubscription()
    {
        return $this->cancelSubscription;
    }

    /**
     * @return mixed|null
     */
    public function getDecreaseSeats()
    {
        return $this->decreaseSeats;
    }

    /**
     * @return mixed|null
     */
    public function getIncreaseSeats()
    {
        return $this->increaseSeats;
    }

    /**
     * @return mixed|null
     */
    public function getPartIdentifier()
    {
        return $this->partIdentifier;
    }

    /**
     * @return mixed|null
     */
    public function getPeriodicity()
    {
        return $this->periodicity;
    }

    /**
     * @return mixed|null
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * @return mixed|null
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return mixed|null
     */
    public function getProductSku()
    {
        return $this->productSku;
    }

    /**
     * @return mixed|null
     */
    public function getReactivateSubscription()
    {
        return $this->reactivateSubscription;
    }

    /**
     * @return mixed|null
     */
    public function getSuspendSubscription()
    {
        return $this->suspendSubscription;
    }

    /**
     * @return mixed|null
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @return mixed|null
     */
    public function getUnitType()
    {
        return $this->unitType;
    }
}
