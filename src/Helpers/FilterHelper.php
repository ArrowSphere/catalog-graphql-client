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

            if (is_array($value) && array_keys($value) !== array_keys(array_values($value))) {
                $searchBodyFilters[] = $this->computeFilters($newPrefix, $value);
            } else {
                $searchBodyFilters[] = [
                    [
                        Filters::NAME => $newPrefix,
                        Filters::VALUE => is_array($value) ? $this->sanitizeArray($value) : $this->sanitizeValue($value),
                    ],
                ];
            }
        }

        return array_merge(...$searchBodyFilters);
    }

    /**
     * Makes sure that the value is a string.
     *
     * If the original value is a bool: "true" or "false" as a string
     * Otherwise, just the original value as a string
     *
     * @param $value
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
