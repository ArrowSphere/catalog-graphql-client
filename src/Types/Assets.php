<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Assets
 */
class Assets
{
    public const FEATURE_PICTURE_URL = 'featurePictureUrl';

    public const MAIN_LOGO_URL = 'mainLogoUrl';

    public const PICTURE_URL = 'pictureUrl';

    public const SQUARE_LOGO_URL = 'squareLogoUrl';

    /** @var string|null */
    private $featurePictureUrl;

    /** @var string|null */
    private $mainLogoUrl;

    /** @var string|null */
    private $pictureUrl;

    /** @var string|null */
    private $squareLogoUrl;

    /**
     * Assets constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->featurePictureUrl = $data[self::FEATURE_PICTURE_URL] ?? null;
        $this->mainLogoUrl = $data[self::MAIN_LOGO_URL] ?? null;
        $this->pictureUrl = $data[self::PICTURE_URL] ?? null;
        $this->squareLogoUrl = $data[self::SQUARE_LOGO_URL] ?? null;
    }

    /**
     * @return string|null
     */
    public function getFeaturePictureUrl(): ?string
    {
        return $this->featurePictureUrl;
    }

    /**
     * @return string|null
     */
    public function getMainLogoUrl(): ?string
    {
        return $this->mainLogoUrl;
    }

    /**
     * @return string|null
     */
    public function getPictureUrl(): ?string
    {
        return $this->pictureUrl;
    }

    /**
     * @return string|null
     */
    public function getSquareLogoUrl(): ?string
    {
        return $this->squareLogoUrl;
    }
}
