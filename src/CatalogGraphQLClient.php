<?php

namespace ArrowSphere\CatalogGraphQLClient;

use ArrowSphere\CatalogGraphQLClient\Exceptions\NonExistingFieldException;
use ArrowSphere\CatalogGraphQLClient\Helpers\FilterHelper;
use ArrowSphere\CatalogGraphQLClient\Helpers\InputPreparator;
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

    /** @var InputPreparator */
    private $inputPreparator;

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
        $this->inputPreparator = new InputPreparator();
    }

    /**
     * @param string $functionName
     * @param array $arguments
     * @param array $selectionSet
     * @return array|object|null
     */
    public function call(string $functionName, array $arguments, array $selectionSet)
    {
        $gql = (new Query($functionName))
            ->setArguments($arguments)
            ->setSelectionSet($selectionSet);

        $results = $this->client->runQuery($gql);

        return $results->getData()->$functionName ?? null;
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
                'paginate'   => new RawObject($this->inputPreparator->prepareInput($pagination)),
                'searchBody' => new RawObject($this->inputPreparator->prepareInput($searchBody)),
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
                'searchBody' => new RawObject($this->inputPreparator->prepareInput($searchBody)),
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
     * @param array|object|null $data
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
