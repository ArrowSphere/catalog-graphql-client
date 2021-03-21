<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class ProgramName
 *
 * @method string getFull()
 * @method ProgramName setFull(string $full)
 */
class ProgramName extends AbstractType
{
    public const FULL = 'full';

    protected const MAPPING = [
        self::FULL => self::TYPE_STRING,
    ];
}
