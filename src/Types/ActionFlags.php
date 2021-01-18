<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class ActionFlags
 */
class ActionFlags
{
    public const IS_AUTO_RENEW = 'isAutoRenew';

    public const IS_MANUAL_PROVISIONING = 'isManualProvisioning';

    public const RENEWAL_SKU = 'renewalSku';

    /** @var bool|null */
    private $isAutoRenew;

    /** @var bool|null */
    private $isManualProvisioning;

    /** @var bool|null */
    private $renewalSku;

    /**
     * ActionFlags constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->isAutoRenew = $data[self::IS_AUTO_RENEW] ?? null;
        $this->isManualProvisioning = $data[self::IS_MANUAL_PROVISIONING] ?? null;
        $this->renewalSku = $data[self::RENEWAL_SKU] ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsAutoRenew(): ?bool
    {
        return $this->isAutoRenew;
    }

    /**
     * @return bool|null
     */
    public function getIsManualProvisioning(): ?bool
    {
        return $this->isManualProvisioning;
    }

    /**
     * @return bool|null
     */
    public function getRenewalSku(): ?bool
    {
        return $this->renewalSku;
    }
}
