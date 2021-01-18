<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class MarketingText
 */
class MarketingText
{
    public const OVERVIEW_DESCRIPTION = 'overviewDescription';

    public const FEATURES_SHORT = 'featuresShort';

    public const FEATURES_FULL = 'featuresFull';

    public const FEATURES = 'features';

    /** @var string|null */
    private $overviewDescription;

    /** @var string|null */
    private $featuresShort;

    /** @var string|null */
    private $featuresFull;

    /** @var string|null */
    private $features;

    /**
     * MarketingText constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->overviewDescription = $data[self::OVERVIEW_DESCRIPTION] ?? null;
        $this->featuresShort = $data[self::FEATURES_SHORT] ?? null;
        $this->featuresFull = $data[self::FEATURES_FULL] ?? null;
        $this->features = $data[self::FEATURES] ?? null;
    }

    /**
     * @return string|null
     */
    public function getOverviewDescription(): ?string
    {
        return $this->overviewDescription;
    }

    /**
     * @return string|null
     */
    public function getFeaturesShort(): ?string
    {
        return $this->featuresShort;
    }

    /**
     * @return string|null
     */
    public function getFeaturesFull(): ?string
    {
        return $this->featuresFull;
    }

    /**
     * @return string|null
     */
    public function getFeatures(): ?string
    {
        return $this->features;
    }
}
