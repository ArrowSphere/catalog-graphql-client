<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Assets;
use PHPUnit\Framework\TestCase;

/**
 * Class AssetsTest
 */
class AssetsTest extends TestCase
{
    public function testFields(): void
    {
        $assets = new Assets([
            Assets::FEATURE_PICTURE_URL => 'feature picture url',
            Assets::MAIN_LOGO_URL       => 'main logo url',
            Assets::PICTURE_URL         => 'picture url',
            Assets::SQUARE_LOGO_URL     => 'square logo url',
        ]);

        self::assertSame('feature picture url', $assets->getFeaturePictureUrl());
        self::assertSame('main logo url', $assets->getMainLogoUrl());
        self::assertSame('picture url', $assets->getPictureUrl());
        self::assertSame('square logo url', $assets->getSquareLogoUrl());

        $assets
            ->setFeaturePictureUrl('url1')
            ->setMainLogoUrl('url2')
            ->setPictureUrl('url3')
            ->setSquareLogoUrl('url4')
        ;

        self::assertSame('url1', $assets->getFeaturePictureUrl());
        self::assertSame('url2', $assets->getMainLogoUrl());
        self::assertSame('url3', $assets->getPictureUrl());
        self::assertSame('url4', $assets->getSquareLogoUrl());
    }
}
