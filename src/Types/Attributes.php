<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Attributes
 *
 * @method bool getCanSwitchAutoRenew()
 * @method bool getCancelSubscription()
 * @method bool getDecreaseSeats()
 * @method bool getIncreaseSeats()
 * @method string getPartIdentifier()
 * @method int getPeriodicity()
 * @method string getPlanId()
 * @method string getProductId()
 * @method string getProductSku()
 * @method bool getReactivateSubscription()
 * @method bool getSuspendSubscription()
 * @method int getTerm()
 * @method string getUnitType()
 * @method Attributes setCanSwitchAutoRenew(bool $canSwitchAutoRenew)
 * @method Attributes setCancelSubscription(bool $cancelSubscription)
 * @method Attributes setDecreaseSeats(bool $decreaseSeat)
 * @method Attributes setIncreaseSeats(bool $increaseSeat)
 * @method Attributes setPartIdentifier(string $partIdentifier)
 * @method Attributes setPeriodicity(int $periodicity)
 * @method Attributes setPlanId(string $planId)
 * @method Attributes setProductId(string $productID)
 * @method Attributes setProductSku(string $productSku)
 * @method Attributes setReactivateSubscription(bool $reactivateSubscription)
 * @method Attributes setSuspendSubscription(bool $suspendSubscription)
 * @method Attributes setTerm(int $setTerm)
 * @method Attributes setUnitType(string $unitType)
 */
class Attributes extends AbstractType
{
    public const CAN_SWITCH_AUTO_RENEW = 'canSwitchAutoRenew';

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

    protected const MAPPING = [
        self::CAN_SWITCH_AUTO_RENEW   => self::TYPE_BOOL,
        self::CANCEL_SUBSCRIPTION     => self::TYPE_BOOL,
        self::DECREASE_SEATS          => self::TYPE_BOOL,
        self::INCREASE_SEATS          => self::TYPE_BOOL,
        self::PART_IDENTIFIER         => self::TYPE_STRING,
        self::PERIODICITY             => self::TYPE_INT,
        self::PLAN_ID                 => self::TYPE_STRING,
        self::PRODUCT_ID              => self::TYPE_STRING,
        self::PRODUCT_SKU             => self::TYPE_STRING,
        self::REACTIVATE_SUBSCRIPTION => self::TYPE_BOOL,
        self::SUSPEND_SUBSCRIPTION    => self::TYPE_BOOL,
        self::TERM                    => self::TYPE_INT,
        self::UNIT_TYPE               => self::TYPE_STRING,
    ];
}
