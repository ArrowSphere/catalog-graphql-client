<?php

namespace ArrowSphere\CatalogGraphQLClient;

use ArrowSphere\CatalogGraphQLClient\Exceptions\NonExistingFieldException;
use ArrowSphere\CatalogGraphQLClient\Helpers\FilterHelper;
use ArrowSphere\CatalogGraphQLClient\Helpers\InputPreparator;
use ArrowSphere\CatalogGraphQLClient\Input\Paginate;
use ArrowSphere\CatalogGraphQLClient\Input\SearchBody;
use ArrowSphere\CatalogGraphQLClient\Types\PaginatedPriceBands;
use ArrowSphere\CatalogGraphQLClient\Types\PaginatedProducts;
use ArrowSphere\CatalogGraphQLClient\Types\PriceBand;
use ArrowSphere\CatalogGraphQLClient\Types\Product;
use GraphQL\Client;
use GraphQL\Query;
use GraphQL\RawObject;

/**
 * Class CatalogGraphQLClient
 */
class CatalogGraphQLClient
{
    /**
     * @const int
     */
    private const DEFAULT_PER_PAGE = 100;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var InputPreparator
     */
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
     *
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
     *
     * @return PaginatedPriceBands
     *
     * @throws NonExistingFieldException
     */
    public function findPriceBands(array $searchBody, array $fields, int $page = 1, int $perPage = self::DEFAULT_PER_PAGE): PaginatedPriceBands
    {
        return new PaginatedPriceBands($this->findItems(Types\Query::GET_PRICE_BANDS, $searchBody, $fields, $page, $perPage));
    }

    /**
     * @param array $searchBody
     * @param array $fields
     * @param int $page
     * @param int $perPage
     *
     * @return PaginatedProducts
     *
     * @throws NonExistingFieldException
     */
    public function findProducts(array $searchBody, array $fields, int $page = 1, int $perPage = self::DEFAULT_PER_PAGE): PaginatedProducts
    {
        return new PaginatedProducts($this->findItems(Types\Query::GET_PRODUCTS, $searchBody, $fields, $page, $perPage));
    }

    /**
     * @deprecated Use findProducts() instead
     *
     * @param array $searchBody
     * @param array $fields
     * @param int $page
     * @param int $perPage
     *
     * @return PaginatedProducts
     *
     * @throws NonExistingFieldException
     */
    public function find(array $searchBody, array $fields, int $page = 1, int $perPage = self::DEFAULT_PER_PAGE): PaginatedProducts
    {
        return $this->findProducts($searchBody, $fields, $page, $perPage);
    }

    /**
     * @param string $functionName
     * @param array $searchBody
     * @param array $fields
     * @param int $page
     * @param int $perPage
     *
     * @return array
     */
    private function findItems(string $functionName, array $searchBody, array $fields, int $page = 1, int $perPage = self::DEFAULT_PER_PAGE): array
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

        $data = $this->call(
            $functionName,
            [
                'paginate'   => new RawObject($this->inputPreparator->prepareInput($pagination)),
                'searchBody' => new RawObject($this->inputPreparator->prepareInput($searchBody)),
            ],
            $selectionSet
        );

        return $this->parseData($data);
    }

    /**
     * @param array $searchBody
     * @param array $fields
     *
     * @return PriceBand|null
     *
     * @throws NonExistingFieldException
     */
    public function findOnePriceBand(array $searchBody, array $fields): ?PriceBand
    {
        $result = $this->findOneItem(Types\Query::PRICE_BAND, $searchBody, $fields);

        if ($result === null) {
            return null;
        }

        return new PriceBand($result);
    }

    /**
     * @param array $searchBody
     * @param array $fields
     *
     * @return Product|null
     *
     * @throws NonExistingFieldException
     */
    public function findOneProduct(array $searchBody, array $fields): ?Product
    {
        $result = $this->findOneItem(Types\Query::PRODUCT, $searchBody, $fields);

        if ($result === null) {
            return null;
        }

        return new Product($result);
    }

    /**
     * @deprecated Use findOneProduct() instead
     *
     * @param array $searchBody
     * @param array $fields
     *
     * @return Product|null
     *
     * @throws NonExistingFieldException
     */
    public function findOne(array $searchBody, array $fields): ?Product
    {
        return $this->findOneProduct($searchBody, $fields);
    }

    /**
     * @param string $functionName
     * @param array $searchBody
     * @param array $fields
     *
     * @return array|null
     */
    private function findOneItem(string $functionName, array $searchBody, array $fields): ?array
    {
        $selectionSet = $this->prepareSelectionSet($fields);

        // TODO something more generic should be done here...
        if (isset($searchBody[SearchBody::FILTERS])) {
            $searchBody[SearchBody::FILTERS] = (new FilterHelper($searchBody[SearchBody::FILTERS]))->getSearchBodyFilters();
        }

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

        return $this->parseData($data);
    }

    /**
     * @param array $fields
     *
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
     *
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
