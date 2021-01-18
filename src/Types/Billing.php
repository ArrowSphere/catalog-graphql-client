<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

/**
 * Class Billing
 */
class Billing
{
    public const CYCLE = 'cycle';

    public const TERM = 'term';

    public const TYPE = 'type';

    /** @var int|null */
    private $cycle;

    /** @var int|null */
    private $term;

    /** @var string|null */
    private $type;

    /**
     * Billing constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->cycle = $data[self::CYCLE] ?? null;
        $this->term = $data[self::TERM] ?? null;
        $this->type = $data[self::TYPE] ?? null;
    }

    /**
     * @return int|null
     */
    public function getCycle(): ?int
    {
        return $this->cycle;
    }

    /**
     * @return int|null
     */
    public function getTerm(): ?int
    {
        return $this->term;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
