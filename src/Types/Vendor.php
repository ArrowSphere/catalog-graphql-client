<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Vendor
 */
class Vendor
{
    public const NAME = 'name';

    /** @var string|null */
    private $name;

    /**
     * Vendor constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->name = $data[self::NAME] ?? null;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}
