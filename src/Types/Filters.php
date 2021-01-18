<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Filters
 */
class Filters
{
    public const NAME = 'name';

    public const VALUE = 'value';

    /** @var string|null */
    private $name;

    /** @var FiltersValues|null */
    private $value;

    /**
     * Filters constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->name = $data[self::NAME] ?? null;

        $this->value = isset($data[self::VALUE]) ? array_map(static function (array $value) {
            return new FiltersValues($value);
        }, $data[self::VALUE]) : null;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return FiltersValues|null
     */
    public function getValue(): ?FiltersValues
    {
        return $this->value;
    }
}
