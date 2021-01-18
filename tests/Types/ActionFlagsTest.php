<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\ActionFlags;
use PHPUnit\Framework\TestCase;

/**
 * Class ActionFlagsTest
 */
class ActionFlagsTest extends TestCase
{
    public function testFields(): void
    {
        $actionFlags = new ActionFlags([
            ActionFlags::RENEWAL_SKU            => true,
            ActionFlags::IS_MANUAL_PROVISIONING => true,
            ActionFlags::IS_AUTO_RENEW          => true,
        ]);

        self::assertTrue($actionFlags->getRenewalSku());
        self::assertTrue($actionFlags->getIsManualProvisioning());
        self::assertTrue($actionFlags->getIsAutoRenew());
    }
}
