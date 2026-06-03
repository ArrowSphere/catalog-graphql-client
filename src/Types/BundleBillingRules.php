<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class BundleBillingRules
 *
 * @method string getBillingCycle()
 * @method string getBillingTerm()
 * @method string getName()
 * @method string getOrderingType()
 * @method BundleBillingRules setBillingCycle(string $billingCycle)
 * @method BundleBillingRules setBillingTerm(string $billingTerm)
 * @method BundleBillingRules setName(string $name)
 * @method BundleBillingRules setOrderingType(string $orderingType)
 */
class BundleBillingRules extends AbstractType
{
    public const BILLING_CYCLE = 'billingCycle';

    public const BILLING_TERM = 'billingTerm';

    public const NAME = 'name';

    public const ORDERING_TYPE = 'orderingType';

    protected const MAPPING = [
        self::BILLING_CYCLE  => self::TYPE_STRING,
        self::BILLING_TERM   => self::TYPE_STRING,
        self::NAME           => self::TYPE_STRING,
        self::ORDERING_TYPE  => self::TYPE_STRING,
    ];
}
