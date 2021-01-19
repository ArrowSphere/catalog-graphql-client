<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class SaleConstraints
 */
class SaleConstraints
{
    public const CUSTOMER_QUALIFICATIONS = 'customerQualifications';

    public const RESELLER_QUALIFICATIONS = 'resellerQualifications';

    public const MIN_QUANTITY = 'minQuantity';

    public const MAX_QUANTITY = 'maxQuantity';

    public const MAX_SUBSCRIPTION_CONSTRAINT = 'maxSubscriptionConstraint';

    public const MAX_SUBSCRIPTION_PER_CUSTOMER = 'maxSubscriptionPerCustomer';

    public const SALE_GROUP = 'saleGroup';

    public const REQUIRED_ATTRIBUTES = 'requiredAttributes';

    /** @var string[]|null */
    private $customerQualifications;

    /** @var string[]|null */
    private $resellerQualifications;

    /** @var int|null */
    private $minQuantity;

    /** @var int|null */
    private $maxQuantity;

    /** @var string|null */
    private $maxSubscriptionConstraint;

    /** @var int|null */
    private $maxSubscriptionPerCustomer;

    /** @var string|null */
    private $saleGroup;

    /** @var string[]|null */
    private $requiredAttributes;

    /**
     * SalesContraints constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->customerQualifications = $data[self::CUSTOMER_QUALIFICATIONS] ?? null;
        $this->resellerQualifications = $data[self::RESELLER_QUALIFICATIONS] ?? null;
        $this->minQuantity = $data[self::MIN_QUANTITY] ?? null;
        $this->maxQuantity = $data[self::MAX_QUANTITY] ?? null;
        $this->maxSubscriptionConstraint = $data[self::MAX_SUBSCRIPTION_CONSTRAINT] ?? null;
        $this->maxSubscriptionPerCustomer = $data[self::MAX_SUBSCRIPTION_PER_CUSTOMER] ?? null;
        $this->saleGroup = $data[self::SALE_GROUP] ?? null;
        $this->requiredAttributes = $data[self::REQUIRED_ATTRIBUTES] ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getCustomerQualifications(): ?array
    {
        return $this->customerQualifications;
    }

    /**
     * @return string[]|null
     */
    public function getResellerQualifications(): ?array
    {
        return $this->resellerQualifications;
    }

    /**
     * @return int|null
     */
    public function getMinQuantity(): ?int
    {
        return $this->minQuantity;
    }

    /**
     * @return int|null
     */
    public function getMaxQuantity(): ?int
    {
        return $this->maxQuantity;
    }

    /**
     * @return string|null
     */
    public function getMaxSubscriptionConstraint(): ?string
    {
        return $this->maxSubscriptionConstraint;
    }

    /**
     * @return int|null
     */
    public function getMaxSubscriptionPerCustomer(): ?int
    {
        return $this->maxSubscriptionPerCustomer;
    }

    /**
     * @return string|null
     */
    public function getSaleGroup(): ?string
    {
        return $this->saleGroup;
    }

    /**
     * @return string[]|null
     */
    public function getRequiredAttributes(): ?array
    {
        return $this->requiredAttributes;
    }
}
