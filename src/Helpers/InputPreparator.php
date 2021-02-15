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
            $prefix = $sequential ? '' : $name . ': ';

            if (is_array($value)) {
                $res[] = $prefix . $this->prepareInput($value);
            } else {
                if (is_bool($value)) {
                    $value = $value ? 'true' : 'false';
                }
                $res[] = $prefix . (is_string($value) ? '"' . $value . '"' : $value);
            }
        }

        if ($sequential) {
            return '[' . implode(', ', $res) . ']';
        }

        return '{' . implode(', ', $res) . '}';
    }
}
