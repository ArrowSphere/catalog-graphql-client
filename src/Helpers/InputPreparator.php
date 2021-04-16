<?php

namespace ArrowSphere\CatalogGraphQLClient\Helpers;

/**
 * Class InputPreparator
 */
class InputPreparator
{
    /**
     * @param array $data
     *
     * @return string
     */
    public function prepareInput(array $data): string
    {
        // This is a quick implementation of a kind of json_encode but without double quotes on the keys (like a JS object)
        // Because this lib wants it like that for RawObject...
        // I'm sure there are bugs in it but for my use cases it works... if you run into bugs please add tests in InputPreparatorTest
        $res = [];

        $sequential = array_is_list($data);

        foreach ($data as $name => $value) {
            $prefix = $sequential ? '' : $this->secureIndex($name) . ': ';

            if (is_array($value)) {
                $res[] = $prefix . $this->prepareInput($value);
            } else {
                $bool = false;
                if (is_bool($value)) {
                    $value = $value ? 'true' : 'false';
                    $bool = true;
                }
                $res[] = $prefix . (is_string($value) && $bool === false ? '"' . addslashes($value) . '"' :  $value);
            }
        }

        if ($sequential) {
            return '[' . implode(', ', $res) . ']';
        }

        return '{' . implode(', ', $res) . '}';
    }

    /**
     * Prepares a string to be used as an index.
     *
     * @param string $index
     *
     * @return string
     */
    private function secureIndex(string $index): string
    {
        if (strpos($index, ' ') !== false) {
            $index = '"' . $index . '"';
        }

        return $index;
    }
}
