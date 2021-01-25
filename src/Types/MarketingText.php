<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class MarketingText
 *
 * @method string getOverviewDescription()
 * @method string getFeaturesShort()
 * @method string getFeaturesFull()
 * @method string getFeatures()
 */
class MarketingText extends AbstractType
{
    public const OVERVIEW_DESCRIPTION = 'overviewDescription';

    public const FEATURES_SHORT = 'featuresShort';

    public const FEATURES_FULL = 'featuresFull';

    public const FEATURES = 'features';

    protected const MAPPING = [
        self::OVERVIEW_DESCRIPTION => self::TYPE_STRING,
        self::FEATURES_SHORT       => self::TYPE_STRING,
        self::FEATURES_FULL        => self::TYPE_STRING,
        self::FEATURES             => self::TYPE_STRING,
    ];
}
