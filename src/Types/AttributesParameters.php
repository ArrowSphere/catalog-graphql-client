<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class AttributesParameters
 *
 * @method string getName()
 * @method string getLabel()
 * @method int getPosition()
 * @method self setName(string $name)
 * @method self setLabel(string $label)
 * @method self setPosition(int $position)
 */
class AttributesParameters extends AbstractType
{
    public const NAME = 'name';

    public const LABEL = 'label';

    public const POSITION = 'position';

    protected const MAPPING = [
        self::NAME  => self::TYPE_STRING,
        self::LABEL => self::TYPE_STRING,
        self::POSITION => self::TYPE_INT,
    ];
}
