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
            ActionFlags::IS_AUTO_RENEW          => true,
            ActionFlags::IS_MANUAL_PROVISIONING => true,
            ActionFlags::RENEWAL_SKU            => true,
        ]);

        self::assertTrue($actionFlags->getIsAutoRenew());
        self::assertTrue($actionFlags->getIsManualProvisioning());
        self::assertTrue($actionFlags->getRenewalSku());
    }
}
