<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class ActionFlags
 *
 * @method bool getIsAutoRenew()
 * @method bool getIsManualProvisioning()
 * @method bool getRenewalSku()
 * @method ActionFlags setIsAutoRenew(bool $isAutoRenew)
 * @method ActionFlags setIsManualProvisioning(bool $isManualProcessing)
 * @method ActionFlags setRenewalSku(bool $renewalSku)
 */
class ActionFlags extends AbstractType
{
    public const IS_AUTO_RENEW = 'isAutoRenew';

    public const IS_MANUAL_PROVISIONING = 'isManualProvisioning';

    public const RENEWAL_SKU = 'renewalSku';

    protected const MAPPING = [
        self::IS_AUTO_RENEW          => self::TYPE_BOOL,
        self::IS_MANUAL_PROVISIONING => self::TYPE_BOOL,
        self::RENEWAL_SKU            => self::TYPE_BOOL,
    ];
}
