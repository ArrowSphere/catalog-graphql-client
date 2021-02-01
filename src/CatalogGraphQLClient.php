<?php

namespace ArrowSphere\CatalogGraphQLClient;

use ArrowSphere\CatalogGraphQLClient\Exceptions\NonExistingFieldException;
use ArrowSphere\CatalogGraphQLClient\Helpers\FilterHelper;
use ArrowSphere\CatalogGraphQLClient\Input\Paginate;
use ArrowSphere\CatalogGraphQLClient\Input\SearchBody;
use ArrowSphere\CatalogGraphQLClient\Types\PaginatedProducts;
use ArrowSphere\CatalogGraphQLClient\Types\Product;
use GraphQL\Client;
use GraphQL\Query;
use GraphQL\RawObject;

/**
 * Class CatalogGraphQLClient
 */
class CatalogGraphQLClient
{
    /** @var Client */
    private $client;

    /**
     * CatalogGraphQLClient constructor.
     *
     * @param string $url The URL of the API
     * @param string $token The OAuth token to call the API
     * @param Client|null $client
     */
    public function __construct(string $url, string $token, Client $client = null)
    {
        $this->client = $client ?? new Client($url, ['Authorization' => $token]);
    }

    /**
     * @param string $functionName
     * @param array $arguments
     * @param array $selectionSet
     * @return array|object
     */
    public function call(string $functionName, array $arguments, array $selectionSet)
    {
        $gql = (new Query($functionName))
            ->setArguments($arguments)
            ->setSelectionSet($selectionSet);

        $results = $this->client->runQuery($gql);

        return $results->getData()->$functionName;
    }

    /**
     * @param array $searchBody
     * @param array $fields
     * @param int $page
     * @param int $perPage
     * @return PaginatedProducts
     * @throws NonExistingFieldException
     */
    public function find(array $searchBody, array $fields, int $page = 1, $perPage = 100): PaginatedProducts
    {
        $selectionSet = $this->prepareSelectionSet($fields);

        $pagination = [
            Paginate::PER_PAGE => $perPage,
            Paginate::PAGE     => $page,
        ];

        // TODO something more generic should be done here...
        if (isset($searchBody[SearchBody::FILTERS])) {
            $searchBody[SearchBody::FILTERS] = (new FilterHelper($searchBody[SearchBody::FILTERS]))->getSearchBodyFilters();
        }

        $functionName = Types\Query::GET_PRODUCTS;

        $data = $this->call(
            $functionName,
            [
                'paginate'   => new RawObject($this->prepareInput($pagination)),
                'searchBody' => new RawObject($this->prepareInput($searchBody)),
            ],
            $selectionSet
        );

        $arrayData = $this->parseData($data);

        return new PaginatedProducts($arrayData);
    }

    /**
     * @param array $searchBody
     * @param array $fields
     * @return Product|null
     * @throws NonExistingFieldException
     */
    public function findOne(array $searchBody, array $fields): ?Product
    {
        $selectionSet = $this->prepareSelectionSet($fields);

        // TODO something more generic should be done here...
        if (isset($searchBody[SearchBody::FILTERS])) {
            $searchBody[SearchBody::FILTERS] = (new FilterHelper($searchBody[SearchBody::FILTERS]))->getSearchBodyFilters();
        }

        $functionName = Types\Query::PRODUCT;

        $data = $this->call(
            $functionName,
            [
                'searchBody' => new RawObject($this->prepareInput($searchBody)),
            ],
            $selectionSet
        );

        if ($data === null) {
            return null;
        }

        $arrayData = $this->parseData($data);

        return new Product($arrayData);
    }

    /**
     * @param array $data
     * @return string
     */
    private function prepareInput(array $data): string
    {
        // This is a quick implementation of a kind of json_encode but without double quotes on the keys (like a JS object)
        // Because this lib wants it like that for RawObject...
        // I'm sure there are bugs in it but for my use cases it works... if you run into bugs please implement unit tests
        $res = [];

        $sequential = (array_values($data) === $data);

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

    /**
     * @param array $fields
     * @return array
     */
    private function prepareSelectionSet(array $fields): array
    {
        $res = [];
        foreach ($fields as $name => $value) {
            if (! is_array($value)) {
                $res[] = $value;
            } else {
                $res[] = (new Query($name))->setSelectionSet($this->prepareSelectionSet($value));
            }
        }

        return $res;
    }

    /**
     * @param $data
     * @return array
     */
    private function parseData($data): array
    {
        $res = [];
        if (is_array($data) || is_object($data)) {
            foreach ($data as $field => $value) {
                if (is_array($value) || is_object($value)) {
                    $res[$field] = $this->parseData($value);
                } else {
                    $res[$field] = $value;
                }
            }
        }

        return $res;
    }
}
