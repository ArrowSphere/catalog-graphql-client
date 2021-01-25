<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class SaleConstraints
 *
 * @method string[] getCustomerQualifications()
 * @method string[] getResellerQualifications()
 * @method int getMaxQuantity()
 * @method int getMinQuantity()
 * @method string getMaxSubscriptionConstraint()
 * @method int getMaxSubscriptionPerCustomer()
 * @method string getSaleGroup()
 * @method string[] getRequiredAttributes()
 */
class SaleConstraints extends AbstractType
{
    public const CUSTOMER_QUALIFICATIONS = 'customerQualifications';

    public const RESELLER_QUALIFICATIONS = 'resellerQualifications';

    public const MAX_QUANTITY = 'maxQuantity';

    public const MIN_QUANTITY = 'minQuantity';

    public const MAX_SUBSCRIPTION_CONSTRAINT = 'maxSubscriptionConstraint';

    public const MAX_SUBSCRIPTION_PER_CUSTOMER = 'maxSubscriptionPerCustomer';

    public const SALE_GROUP = 'saleGroup';

    public const REQUIRED_ATTRIBUTES = 'requiredAttributes';

    protected const MAPPING = [
        self::CUSTOMER_QUALIFICATIONS       => [
            self::MAPPING_TYPE  => self::TYPE_STRING,
            self::MAPPING_ARRAY => true,
        ],
        self::RESELLER_QUALIFICATIONS       => [
            self::MAPPING_TYPE  => self::TYPE_STRING,
            self::MAPPING_ARRAY => true,
        ],
        self::MAX_QUANTITY                  => self::TYPE_INT,
        self::MIN_QUANTITY                  => self::TYPE_INT,
        self::MAX_SUBSCRIPTION_CONSTRAINT   => self::TYPE_STRING,
        self::MAX_SUBSCRIPTION_PER_CUSTOMER => self::TYPE_INT,
        self::SALE_GROUP                    => self::TYPE_STRING,
        self::REQUIRED_ATTRIBUTES           => [
            self::MAPPING_TYPE  => self::TYPE_STRING,
            self::MAPPING_ARRAY => true,
        ]
    ];
}
