<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Family
 */
class Family
{
    public const ID = 'id';

    public const NAME = 'name';

    /** @var string|null */
    private $id;

    /** @var string|null */
    private $name;

    /**
     * Family constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = $data[self::ID] ?? null;
        $this->name = $data[self::NAME] ?? null;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}
