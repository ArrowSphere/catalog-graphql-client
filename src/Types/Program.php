<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Program
 *
 * @method bool getIsEnabled()
 * @method string getLegacyCode()
 * @method ProgramName getNames()
 * @method Program setIsEnabled(bool $isEnabled)
 * @method Program setLegacyCode(string $legacyCode)
 * @method Program setNames(ProgramName $names)
 */
class Program extends AbstractType
{
    public const IS_ENABLED = 'isEnabled';

    public const LEGACY_CODE = 'legacyCode';

    public const NAMES = 'names';

    protected const MAPPING = [
        self::IS_ENABLED  => self::TYPE_BOOL,
        self::LEGACY_CODE => self::TYPE_STRING,
        self::NAMES       => ProgramName::class,
    ];
}
