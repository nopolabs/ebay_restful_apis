<?php
/**
 * RateTableApi
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Account
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Account API
 *
 * The Account API gives sellers the ability to configure their eBay seller accounts, including the seller's policies (the Fulfillment Policy, Payment Policy, and Return Policy), opt in and out of eBay seller programs, configure sales tax tables, and get account information. For details on the restrictions and availability of the methods in this API, see API restrictions.
 *
 * OpenAPI spec version: v1.3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Account\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Nopolabs\EBay\Sell\Account\ApiException;
use Nopolabs\EBay\Sell\Account\Configuration;
use Nopolabs\EBay\Sell\Account\HeaderSelector;
use Nopolabs\EBay\Sell\Account\ObjectSerializer;

/**
 * RateTableApi Class Doc Comment
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Account
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RateTableApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getRateTables
     *
     * @param  string $country_code This query parameter specifies the two-letter ISO 3166-1 Alpha-2 code of country for which you want shipping-rate table information. If you do not specify a county code, the request returns all the seller-defined rate tables. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/CountryCodeEnum.html (optional)
     *
     * @throws \Nopolabs\EBay\Sell\Account\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Nopolabs\EBay\Sell\Account\Model\RateTableResponse
     */
    public function getRateTables($country_code = null)
    {
        list($response) = $this->getRateTablesWithHttpInfo($country_code);
        return $response;
    }

    /**
     * Operation getRateTablesWithHttpInfo
     *
     * @param  string $country_code This query parameter specifies the two-letter ISO 3166-1 Alpha-2 code of country for which you want shipping-rate table information. If you do not specify a county code, the request returns all the seller-defined rate tables. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/CountryCodeEnum.html (optional)
     *
     * @throws \Nopolabs\EBay\Sell\Account\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Nopolabs\EBay\Sell\Account\Model\RateTableResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRateTablesWithHttpInfo($country_code = null)
    {
        $returnType = '\Nopolabs\EBay\Sell\Account\Model\RateTableResponse';
        $request = $this->getRateTablesRequest($country_code);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Nopolabs\EBay\Sell\Account\Model\RateTableResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRateTablesAsync
     *
     * 
     *
     * @param  string $country_code This query parameter specifies the two-letter ISO 3166-1 Alpha-2 code of country for which you want shipping-rate table information. If you do not specify a county code, the request returns all the seller-defined rate tables. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/CountryCodeEnum.html (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRateTablesAsync($country_code = null)
    {
        return $this->getRateTablesAsyncWithHttpInfo($country_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRateTablesAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $country_code This query parameter specifies the two-letter ISO 3166-1 Alpha-2 code of country for which you want shipping-rate table information. If you do not specify a county code, the request returns all the seller-defined rate tables. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/CountryCodeEnum.html (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRateTablesAsyncWithHttpInfo($country_code = null)
    {
        $returnType = '\Nopolabs\EBay\Sell\Account\Model\RateTableResponse';
        $request = $this->getRateTablesRequest($country_code);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getRateTables'
     *
     * @param  string $country_code This query parameter specifies the two-letter ISO 3166-1 Alpha-2 code of country for which you want shipping-rate table information. If you do not specify a county code, the request returns all the seller-defined rate tables. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/CountryCodeEnum.html (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getRateTablesRequest($country_code = null)
    {

        $resourcePath = '/rate_table/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($country_code !== null) {
            $queryParams['country_code'] = ObjectSerializer::toQueryValue($country_code);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
