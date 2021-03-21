<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Assets
 *
 * @method string getFeaturePictureUrl()
 * @method string getMainLogoUrl()
 * @method string getPictureUrl()
 * @method string getSquareLogoUrl()
 * @method Assets setFeaturePictureUrl(string $featurePictureUrl)
 * @method Assets setMainLogoUrl(string $mainLogoUrl)
 * @method Assets setPictureUrl(string $pictureUrl)
 * @method Assets setSquareLogoUrl(string $squareLogoUrl)
 */
class Assets extends AbstractType
{
    public const FEATURE_PICTURE_URL = 'featurePictureUrl';

    public const MAIN_LOGO_URL = 'mainLogoUrl';

    public const PICTURE_URL = 'pictureUrl';

    public const SQUARE_LOGO_URL = 'squareLogoUrl';

    protected const MAPPING = [
        self::FEATURE_PICTURE_URL => self::TYPE_STRING,
        self::MAIN_LOGO_URL       => self::TYPE_STRING,
        self::PICTURE_URL         => self::TYPE_STRING,
        self::SQUARE_LOGO_URL     => self::TYPE_STRING,
    ];
}
