<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\MarketingText;
use PHPUnit\Framework\TestCase;

/**
 * Class MarketingText
 */
class MarketingTextTest extends TestCase
{
    public function testFields(): void
    {
        $marketingText = new MarketingText([
            MarketingText::FEATURES             => 'features',
            MarketingText::FEATURES_FULL        => 'features full',
            MarketingText::FEATURES_SHORT       => 'features short',
            MarketingText::OVERVIEW_DESCRIPTION => 'overview description',
        ]);

        self::assertSame('features', $marketingText->getFeatures());
        self::assertSame('features full', $marketingText->getFeaturesFull());
        self::assertSame('features short', $marketingText->getFeaturesShort());
        self::assertSame('overview description', $marketingText->getOverviewDescription());
    }
}
