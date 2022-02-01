<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Promotion
 *
 * @method string getId()
 * @method Entry[] getEntries()
 * @method Promotion setId(string $id)
 * @method Promotion setEntries(Entry[] $entries)
 */
class Promotion extends AbstractType
{
    public const ID = 'id';

    public const ENTRIES = 'entries';

    protected const MAPPING = [
        self::ID      => self::TYPE_STRING,
        self::ENTRIES => [
            self::MAPPING_TYPE  => Entry::class,
            self::MAPPING_ARRAY => true,
        ],
    ];
}
