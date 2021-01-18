<?php

namespace ArrowSphere\CatalogGraphQLClient\Helpers;

use ArrowSphere\CatalogGraphQLClient\Types\Filters;

/**
 * Class FilterHelper
 */
class FilterHelper
{
    private $filters;

    /**
     * FilterHelper constructor.
     *
     * @param array $filters
     */
    public function __construct(array $filters)
    {
        $this->filters = $filters;
    }

    /**
     * @return array
     */
    public function getSearchBodyFilters(): array
    {
        return $this->computeFilters('', $this->filters);
    }

    /**
     * @param string $prefix
     * @param array $filters
     * @return array
     */
    private function computeFilters(string $prefix, array $filters): array
    {
        $searchBodyFilters = [[]];
        foreach ($filters as $name => $value) {
            $newPrefix = $prefix === '' ? $name : $prefix . '.' . $name;

            if (is_array($value)) {
                $searchBodyFilters[] = $this->computeFilters($newPrefix, $value);
            } else {
                $searchBodyFilters[] = [
                    [
                        Filters::NAME  => $newPrefix,
                        Filters::VALUE => $value,
                    ],
                ];
            }
        }

        return array_merge(...$searchBodyFilters);
    }
}
