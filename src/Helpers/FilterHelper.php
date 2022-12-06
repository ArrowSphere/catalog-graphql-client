<?php

namespace ArrowSphere\CatalogGraphQLClient\Helpers;

use ArrowSphere\CatalogGraphQLClient\Input\Filter;

/**
 * Class FilterHelper
 */
class FilterHelper
{
    /**
     * @var array
     */
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
        return $this->computeFilters($this->filters);
    }

    /**
     * @param array $filters
     *
     * @return array
     */
    private function computeFilters(array $filters): array
    {
        $searchBodyFilters = [[]];
        foreach ($filters as $filter) {
            $searchBodyFilters[] = [
                array_merge(
                    [
                        Filter::NAME => $filter['name'],
                        Filter::VALUE => is_array($filter['value']) ? $this->sanitizeArray($filter['value']) : $this->sanitizeValue($filter['value']),
                    ],
                    empty($filter['filters']) ? [] : ['filters' => $this->computeFilters($filter['filters'])]
                )
            ];
        }

        return array_merge(...$searchBodyFilters);
    }

    /**
     * Makes sure that the value is a string.
     *
     * If the original value is a bool: "true" or "false" as a string
     * Otherwise, just the original value as a string
     *
     * @param string|int|float|bool $value
     *
     * @return string
     */
    private function sanitizeValue($value): string
    {
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        return (string)$value;
    }

    /**
     * Runs the sanitizeValue method on each of the values of the array.
     *
     * @param array $values
     *
     * @return array
     */
    private function sanitizeArray(array $values): array
    {
        return array_map([
            $this,
            'sanitizeValue',
        ], $values);
    }
}
