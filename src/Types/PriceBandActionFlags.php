<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class PriceBandActionFlags
 *
 * @method bool getCanBeCancelled()
 * @method bool getCanBeReactivated()
 * @method bool getCanBeSuspended()
 * @method bool getCanDecreaseSeats()
 * @method bool getCanIncreaseSeats()
 * @method PriceBandActionFlags setCanBeCancelled(bool $canBeCancelled)
 * @method PriceBandActionFlags setCanBeReactivated(bool $canBeReactivated)
 * @method PriceBandActionFlags setCanBeSuspended(bool $canBeSuspended)
 * @method PriceBandActionFlags setCanDecreaseSeats(bool $canDecreaseSeats)
 * @method PriceBandActionFlags setCanIncreaseSeats(bool $canIncreaseSeats)
 */
class PriceBandActionFlags extends AbstractType
{
    public const CAN_BE_CANCELLED = 'canBeCancelled';

    public const CAN_BE_REACTIVATED = 'canBeReactivated';

    public const CAN_BE_SUSPENDED = 'canBeSuspended';

    public const CAN_DECREASE_SEATS = 'canDecreaseSeats';

    public const CAN_INCREASE_SEATS = 'canIncreaseSeats';

    protected const MAPPING = [
        self::CAN_BE_CANCELLED   => self::TYPE_BOOL,
        self::CAN_BE_REACTIVATED => self::TYPE_BOOL,
        self::CAN_BE_SUSPENDED   => self::TYPE_BOOL,
        self::CAN_DECREASE_SEATS => self::TYPE_BOOL,
        self::CAN_INCREASE_SEATS => self::TYPE_BOOL,
    ];
}
