<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class FiltersValues
 */
class FiltersValues
{
    public const VALUE = 'value';

    public const COUNT = 'count';

    /** @var string|null */
    private $value;

    /** @var int|null */
    private $count;

    /**
     * FiltersValues constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->value = $data[self::VALUE] ?? null;
        $this->count = $data[self::COUNT] ?? null;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }
}
