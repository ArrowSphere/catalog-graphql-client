<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandActionFlags
 */
class PriceBandActionFlags
{
    public const CAN_BE_CANCELLED = 'canBeCancelled';

    public const CAN_BE_REACTIVATED = 'canBeReactivated';

    public const CAN_BE_SUSPENDED = 'canBeSuspended';

    public const CAN_DECREASE_SEATS = 'canDecreaseSeats';

    public const CAN_INCREASE_SEATS = 'canIncreaseSeats';

    /** @var bool|null */
    private $canBeCancelled;

    /** @var bool|null */
    private $canBeReactivated;

    /** @var bool|null */
    private $canBeSuspended;

    /** @var bool|null */
    private $canDecreaseSeats;

    /** @var bool|null */
    private $canIncreaseSeats;

    /**
     * PriceBandActionFlags constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->canBeCancelled = $data[self::CAN_BE_CANCELLED] ?? null;
        $this->canBeReactivated = $data[self::CAN_BE_REACTIVATED] ?? null;
        $this->canBeSuspended = $data[self::CAN_BE_SUSPENDED] ?? null;
        $this->canDecreaseSeats = $data[self::CAN_DECREASE_SEATS] ?? null;
        $this->canIncreaseSeats = $data[self::CAN_INCREASE_SEATS] ?? null;
    }

    /**
     * @return bool|null
     */
    public function getCanBeCancelled(): ?bool
    {
        return $this->canBeCancelled;
    }

    /**
     * @return bool|null
     */
    public function getCanBeReactivated(): ?bool
    {
        return $this->canBeReactivated;
    }

    /**
     * @return bool|null
     */
    public function getCanBeSuspended(): ?bool
    {
        return $this->canBeSuspended;
    }

    /**
     * @return bool|null
     */
    public function getCanDecreaseSeats(): ?bool
    {
        return $this->canDecreaseSeats;
    }

    /**
     * @return bool|null
     */
    public function getCanIncreaseSeats(): ?bool
    {
        return $this->canIncreaseSeats;
    }
}
