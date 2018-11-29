<?php
/**
 * TrafficReportApi
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Analytics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Analytics API
 *
 * The Analytics API provides information about a seller's business performance. The getTrafficReport method shows how buyers are engaging with listings and the getSellerStandardsProfile methods show if the seller is meeting buyer expectations.
 *
 * OpenAPI spec version: v1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Analytics\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Nopolabs\EBay\Sell\Analytics\ApiException;
use Nopolabs\EBay\Sell\Analytics\Configuration;
use Nopolabs\EBay\Sell\Analytics\HeaderSelector;
use Nopolabs\EBay\Sell\Analytics\ObjectSerializer;

/**
 * TrafficReportApi Class Doc Comment
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Analytics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrafficReportApi
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
     * Operation getTrafficReport
     *
     * @param  string $dimension Specifies the basis of the report data. For example: If you specify dimension&#x3D;day and metric&#x3D;CLICK_THROUGH_RATE, the traffic report would contain the number of times a buyer saw a listing impression and then clicked through to the listing page for each day in the date range. If you specify dimension&#x3D;listing and metric&#x3D;LISTING_IMPRESSION_STORE, the traffic report would contain the number of times that listing appeared on the seller&#39;s store. Valid values: &amp;nbsp;&amp;nbsp;DAY &amp;nbsp;&amp;nbsp;LISTING Required: Always (optional)
     * @param  string $filter Limits the report data returned. You can refine the report data returned using the date_range, listing_ids, and marketplace_ids filters. date_range This limits the report to a date range. You can get up a total of 90 days going back as far as 2 years, defined as 365 * 2 days. eBay returns an error (and not data) if you pass in a date range greater than 90 days, or the start date is after the latest date in which traffic data exists (known as the lastUpdatedDate). If the range is beyond the lastUpdatedDate, eBay returns data up to the lastUpdatedDate. Format: YYYYMMDD..YYYYMMDD Maximum range: 90 days Required: Always Note: In the request, the date range must be encoded. For example: %5B20160601..20160828%5D listing_ids This limits the results to a list of listing IDs separated by |. This is for active and sold listings in last 90 days and unsold listings in the last 30 days. Also all the listings must be the seller&#39;s listings and the items must on the specified marketplace. Maximum: 200 Default: 200 Note: In the request, the listing IDs must be encoded. For example: %5B12323232|12321313%5D marketplace_ids The eBay marketplace ID for which you want the report generated (the method currently supports only a single marketplace ID). Valid values: EBAY_AU EBAY_DE EBAY_GB EBAY_US EBAY_MOTORS_US Required if you set the dimension parameter to DAY. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/FilterField.html (optional)
     * @param  string $metric Specifies a comma separated list of the metrics you want included in the report. Valid values: CLICK_THROUGH_RATE The number of times a buyer saw a listing impression and then clicked through to the listing page. Localized name: Click through rate LISTING_IMPRESSION_SEARCH_RESULTS_PAGE The number of times the seller&#39;s listings appeared on the search results page. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from the search results page LISTING_IMPRESSION_STORE The number of times the seller&#39;s listings appeared on the seller&#39;s store. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from your Store LISTING_IMPRESSION_TOTAL The total number of times the seller&#39;s listings appeared in the search results page or the seller&#39;s store. If the listing appeared in both places, it is counted each time. However, the listing might not have been visible to the buyer because of its position on the page. (LISTING_IMPRESSION_SEARCH_RESULTS_PAGE + LISTING_IMPRESSION_STORE) Localized name: Total listing impressions LISTING_VIEWS_SOURCE_DIRECT The number of times a seller&#39;s listing was viewed directly, such as when a buyer uses a bookmark. Localized name: Direct views LISTING_VIEWS_SOURCE_OFF_EBAY The number of times a seller&#39;s listing was viewed from a site other than eBay, such as when a buyer clicks on a link to the listing from a Google search page. Localized name: Off eBay views LISTING_VIEWS_SOURCE_OTHER_EBAY The number of times a seller&#39;s listing was viewed from an eBay page, other than the search results page or the seller&#39;s store. Localized name: Views from non-search and non-store pages within eBay LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the search results page. Localized name: Views from the search results page LISTING_VIEWS_SOURCE_STORE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the seller&#39;s store. Localized name: Views from your Store LISTING_VIEWS_TOTAL Total number of listings viewed. (LISTING_VIEWS_SOURCE_DIRECT + LISTING_VIEWS_SOURCE_OFF_EBAY + LISTING_VIEWS_SOURCE_OTHER_EBAY + LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE + LISTING_VIEWS_SOURCE_STORE) Localized name: Total views SALES_CONVERSION_RATE The number of transactions divided by the number of listings views. (TRANSACTION / LISTING_VIEWS_TOTAL) Localized name: Sales conversion rate TRANSACTION The number of transactions. Localized name: Transaction count Required: Always (optional)
     * @param  string $sort Specifies a single metric to be sorted and whether you want to sort in ascending or descending order. Specifying a metric in this field, sorts that data in ascending order. To sort in descending order add - in front of the metric. This is helpful when the seller wants to see metrics starting with the greatest number, such as the CLICK_THROUGH_RATE (sort&#x3D;-CLICK_THROUGH_RATE). Default: ascending If null: Sorts by the first metric specified in ascending order Maximum metric: 1 Valid Values: metric values For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/SortField.html (optional)
     *
     * @throws \Nopolabs\EBay\Sell\Analytics\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Nopolabs\EBay\Sell\Analytics\Model\Report
     */
    public function getTrafficReport($dimension = null, $filter = null, $metric = null, $sort = null)
    {
        list($response) = $this->getTrafficReportWithHttpInfo($dimension, $filter, $metric, $sort);
        return $response;
    }

    /**
     * Operation getTrafficReportWithHttpInfo
     *
     * @param  string $dimension Specifies the basis of the report data. For example: If you specify dimension&#x3D;day and metric&#x3D;CLICK_THROUGH_RATE, the traffic report would contain the number of times a buyer saw a listing impression and then clicked through to the listing page for each day in the date range. If you specify dimension&#x3D;listing and metric&#x3D;LISTING_IMPRESSION_STORE, the traffic report would contain the number of times that listing appeared on the seller&#39;s store. Valid values: &amp;nbsp;&amp;nbsp;DAY &amp;nbsp;&amp;nbsp;LISTING Required: Always (optional)
     * @param  string $filter Limits the report data returned. You can refine the report data returned using the date_range, listing_ids, and marketplace_ids filters. date_range This limits the report to a date range. You can get up a total of 90 days going back as far as 2 years, defined as 365 * 2 days. eBay returns an error (and not data) if you pass in a date range greater than 90 days, or the start date is after the latest date in which traffic data exists (known as the lastUpdatedDate). If the range is beyond the lastUpdatedDate, eBay returns data up to the lastUpdatedDate. Format: YYYYMMDD..YYYYMMDD Maximum range: 90 days Required: Always Note: In the request, the date range must be encoded. For example: %5B20160601..20160828%5D listing_ids This limits the results to a list of listing IDs separated by |. This is for active and sold listings in last 90 days and unsold listings in the last 30 days. Also all the listings must be the seller&#39;s listings and the items must on the specified marketplace. Maximum: 200 Default: 200 Note: In the request, the listing IDs must be encoded. For example: %5B12323232|12321313%5D marketplace_ids The eBay marketplace ID for which you want the report generated (the method currently supports only a single marketplace ID). Valid values: EBAY_AU EBAY_DE EBAY_GB EBAY_US EBAY_MOTORS_US Required if you set the dimension parameter to DAY. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/FilterField.html (optional)
     * @param  string $metric Specifies a comma separated list of the metrics you want included in the report. Valid values: CLICK_THROUGH_RATE The number of times a buyer saw a listing impression and then clicked through to the listing page. Localized name: Click through rate LISTING_IMPRESSION_SEARCH_RESULTS_PAGE The number of times the seller&#39;s listings appeared on the search results page. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from the search results page LISTING_IMPRESSION_STORE The number of times the seller&#39;s listings appeared on the seller&#39;s store. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from your Store LISTING_IMPRESSION_TOTAL The total number of times the seller&#39;s listings appeared in the search results page or the seller&#39;s store. If the listing appeared in both places, it is counted each time. However, the listing might not have been visible to the buyer because of its position on the page. (LISTING_IMPRESSION_SEARCH_RESULTS_PAGE + LISTING_IMPRESSION_STORE) Localized name: Total listing impressions LISTING_VIEWS_SOURCE_DIRECT The number of times a seller&#39;s listing was viewed directly, such as when a buyer uses a bookmark. Localized name: Direct views LISTING_VIEWS_SOURCE_OFF_EBAY The number of times a seller&#39;s listing was viewed from a site other than eBay, such as when a buyer clicks on a link to the listing from a Google search page. Localized name: Off eBay views LISTING_VIEWS_SOURCE_OTHER_EBAY The number of times a seller&#39;s listing was viewed from an eBay page, other than the search results page or the seller&#39;s store. Localized name: Views from non-search and non-store pages within eBay LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the search results page. Localized name: Views from the search results page LISTING_VIEWS_SOURCE_STORE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the seller&#39;s store. Localized name: Views from your Store LISTING_VIEWS_TOTAL Total number of listings viewed. (LISTING_VIEWS_SOURCE_DIRECT + LISTING_VIEWS_SOURCE_OFF_EBAY + LISTING_VIEWS_SOURCE_OTHER_EBAY + LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE + LISTING_VIEWS_SOURCE_STORE) Localized name: Total views SALES_CONVERSION_RATE The number of transactions divided by the number of listings views. (TRANSACTION / LISTING_VIEWS_TOTAL) Localized name: Sales conversion rate TRANSACTION The number of transactions. Localized name: Transaction count Required: Always (optional)
     * @param  string $sort Specifies a single metric to be sorted and whether you want to sort in ascending or descending order. Specifying a metric in this field, sorts that data in ascending order. To sort in descending order add - in front of the metric. This is helpful when the seller wants to see metrics starting with the greatest number, such as the CLICK_THROUGH_RATE (sort&#x3D;-CLICK_THROUGH_RATE). Default: ascending If null: Sorts by the first metric specified in ascending order Maximum metric: 1 Valid Values: metric values For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/SortField.html (optional)
     *
     * @throws \Nopolabs\EBay\Sell\Analytics\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Nopolabs\EBay\Sell\Analytics\Model\Report, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrafficReportWithHttpInfo($dimension = null, $filter = null, $metric = null, $sort = null)
    {
        $returnType = '\Nopolabs\EBay\Sell\Analytics\Model\Report';
        $request = $this->getTrafficReportRequest($dimension, $filter, $metric, $sort);

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
                        '\Nopolabs\EBay\Sell\Analytics\Model\Report',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrafficReportAsync
     *
     * 
     *
     * @param  string $dimension Specifies the basis of the report data. For example: If you specify dimension&#x3D;day and metric&#x3D;CLICK_THROUGH_RATE, the traffic report would contain the number of times a buyer saw a listing impression and then clicked through to the listing page for each day in the date range. If you specify dimension&#x3D;listing and metric&#x3D;LISTING_IMPRESSION_STORE, the traffic report would contain the number of times that listing appeared on the seller&#39;s store. Valid values: &amp;nbsp;&amp;nbsp;DAY &amp;nbsp;&amp;nbsp;LISTING Required: Always (optional)
     * @param  string $filter Limits the report data returned. You can refine the report data returned using the date_range, listing_ids, and marketplace_ids filters. date_range This limits the report to a date range. You can get up a total of 90 days going back as far as 2 years, defined as 365 * 2 days. eBay returns an error (and not data) if you pass in a date range greater than 90 days, or the start date is after the latest date in which traffic data exists (known as the lastUpdatedDate). If the range is beyond the lastUpdatedDate, eBay returns data up to the lastUpdatedDate. Format: YYYYMMDD..YYYYMMDD Maximum range: 90 days Required: Always Note: In the request, the date range must be encoded. For example: %5B20160601..20160828%5D listing_ids This limits the results to a list of listing IDs separated by |. This is for active and sold listings in last 90 days and unsold listings in the last 30 days. Also all the listings must be the seller&#39;s listings and the items must on the specified marketplace. Maximum: 200 Default: 200 Note: In the request, the listing IDs must be encoded. For example: %5B12323232|12321313%5D marketplace_ids The eBay marketplace ID for which you want the report generated (the method currently supports only a single marketplace ID). Valid values: EBAY_AU EBAY_DE EBAY_GB EBAY_US EBAY_MOTORS_US Required if you set the dimension parameter to DAY. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/FilterField.html (optional)
     * @param  string $metric Specifies a comma separated list of the metrics you want included in the report. Valid values: CLICK_THROUGH_RATE The number of times a buyer saw a listing impression and then clicked through to the listing page. Localized name: Click through rate LISTING_IMPRESSION_SEARCH_RESULTS_PAGE The number of times the seller&#39;s listings appeared on the search results page. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from the search results page LISTING_IMPRESSION_STORE The number of times the seller&#39;s listings appeared on the seller&#39;s store. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from your Store LISTING_IMPRESSION_TOTAL The total number of times the seller&#39;s listings appeared in the search results page or the seller&#39;s store. If the listing appeared in both places, it is counted each time. However, the listing might not have been visible to the buyer because of its position on the page. (LISTING_IMPRESSION_SEARCH_RESULTS_PAGE + LISTING_IMPRESSION_STORE) Localized name: Total listing impressions LISTING_VIEWS_SOURCE_DIRECT The number of times a seller&#39;s listing was viewed directly, such as when a buyer uses a bookmark. Localized name: Direct views LISTING_VIEWS_SOURCE_OFF_EBAY The number of times a seller&#39;s listing was viewed from a site other than eBay, such as when a buyer clicks on a link to the listing from a Google search page. Localized name: Off eBay views LISTING_VIEWS_SOURCE_OTHER_EBAY The number of times a seller&#39;s listing was viewed from an eBay page, other than the search results page or the seller&#39;s store. Localized name: Views from non-search and non-store pages within eBay LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the search results page. Localized name: Views from the search results page LISTING_VIEWS_SOURCE_STORE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the seller&#39;s store. Localized name: Views from your Store LISTING_VIEWS_TOTAL Total number of listings viewed. (LISTING_VIEWS_SOURCE_DIRECT + LISTING_VIEWS_SOURCE_OFF_EBAY + LISTING_VIEWS_SOURCE_OTHER_EBAY + LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE + LISTING_VIEWS_SOURCE_STORE) Localized name: Total views SALES_CONVERSION_RATE The number of transactions divided by the number of listings views. (TRANSACTION / LISTING_VIEWS_TOTAL) Localized name: Sales conversion rate TRANSACTION The number of transactions. Localized name: Transaction count Required: Always (optional)
     * @param  string $sort Specifies a single metric to be sorted and whether you want to sort in ascending or descending order. Specifying a metric in this field, sorts that data in ascending order. To sort in descending order add - in front of the metric. This is helpful when the seller wants to see metrics starting with the greatest number, such as the CLICK_THROUGH_RATE (sort&#x3D;-CLICK_THROUGH_RATE). Default: ascending If null: Sorts by the first metric specified in ascending order Maximum metric: 1 Valid Values: metric values For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/SortField.html (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrafficReportAsync($dimension = null, $filter = null, $metric = null, $sort = null)
    {
        return $this->getTrafficReportAsyncWithHttpInfo($dimension, $filter, $metric, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrafficReportAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $dimension Specifies the basis of the report data. For example: If you specify dimension&#x3D;day and metric&#x3D;CLICK_THROUGH_RATE, the traffic report would contain the number of times a buyer saw a listing impression and then clicked through to the listing page for each day in the date range. If you specify dimension&#x3D;listing and metric&#x3D;LISTING_IMPRESSION_STORE, the traffic report would contain the number of times that listing appeared on the seller&#39;s store. Valid values: &amp;nbsp;&amp;nbsp;DAY &amp;nbsp;&amp;nbsp;LISTING Required: Always (optional)
     * @param  string $filter Limits the report data returned. You can refine the report data returned using the date_range, listing_ids, and marketplace_ids filters. date_range This limits the report to a date range. You can get up a total of 90 days going back as far as 2 years, defined as 365 * 2 days. eBay returns an error (and not data) if you pass in a date range greater than 90 days, or the start date is after the latest date in which traffic data exists (known as the lastUpdatedDate). If the range is beyond the lastUpdatedDate, eBay returns data up to the lastUpdatedDate. Format: YYYYMMDD..YYYYMMDD Maximum range: 90 days Required: Always Note: In the request, the date range must be encoded. For example: %5B20160601..20160828%5D listing_ids This limits the results to a list of listing IDs separated by |. This is for active and sold listings in last 90 days and unsold listings in the last 30 days. Also all the listings must be the seller&#39;s listings and the items must on the specified marketplace. Maximum: 200 Default: 200 Note: In the request, the listing IDs must be encoded. For example: %5B12323232|12321313%5D marketplace_ids The eBay marketplace ID for which you want the report generated (the method currently supports only a single marketplace ID). Valid values: EBAY_AU EBAY_DE EBAY_GB EBAY_US EBAY_MOTORS_US Required if you set the dimension parameter to DAY. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/FilterField.html (optional)
     * @param  string $metric Specifies a comma separated list of the metrics you want included in the report. Valid values: CLICK_THROUGH_RATE The number of times a buyer saw a listing impression and then clicked through to the listing page. Localized name: Click through rate LISTING_IMPRESSION_SEARCH_RESULTS_PAGE The number of times the seller&#39;s listings appeared on the search results page. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from the search results page LISTING_IMPRESSION_STORE The number of times the seller&#39;s listings appeared on the seller&#39;s store. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from your Store LISTING_IMPRESSION_TOTAL The total number of times the seller&#39;s listings appeared in the search results page or the seller&#39;s store. If the listing appeared in both places, it is counted each time. However, the listing might not have been visible to the buyer because of its position on the page. (LISTING_IMPRESSION_SEARCH_RESULTS_PAGE + LISTING_IMPRESSION_STORE) Localized name: Total listing impressions LISTING_VIEWS_SOURCE_DIRECT The number of times a seller&#39;s listing was viewed directly, such as when a buyer uses a bookmark. Localized name: Direct views LISTING_VIEWS_SOURCE_OFF_EBAY The number of times a seller&#39;s listing was viewed from a site other than eBay, such as when a buyer clicks on a link to the listing from a Google search page. Localized name: Off eBay views LISTING_VIEWS_SOURCE_OTHER_EBAY The number of times a seller&#39;s listing was viewed from an eBay page, other than the search results page or the seller&#39;s store. Localized name: Views from non-search and non-store pages within eBay LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the search results page. Localized name: Views from the search results page LISTING_VIEWS_SOURCE_STORE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the seller&#39;s store. Localized name: Views from your Store LISTING_VIEWS_TOTAL Total number of listings viewed. (LISTING_VIEWS_SOURCE_DIRECT + LISTING_VIEWS_SOURCE_OFF_EBAY + LISTING_VIEWS_SOURCE_OTHER_EBAY + LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE + LISTING_VIEWS_SOURCE_STORE) Localized name: Total views SALES_CONVERSION_RATE The number of transactions divided by the number of listings views. (TRANSACTION / LISTING_VIEWS_TOTAL) Localized name: Sales conversion rate TRANSACTION The number of transactions. Localized name: Transaction count Required: Always (optional)
     * @param  string $sort Specifies a single metric to be sorted and whether you want to sort in ascending or descending order. Specifying a metric in this field, sorts that data in ascending order. To sort in descending order add - in front of the metric. This is helpful when the seller wants to see metrics starting with the greatest number, such as the CLICK_THROUGH_RATE (sort&#x3D;-CLICK_THROUGH_RATE). Default: ascending If null: Sorts by the first metric specified in ascending order Maximum metric: 1 Valid Values: metric values For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/SortField.html (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrafficReportAsyncWithHttpInfo($dimension = null, $filter = null, $metric = null, $sort = null)
    {
        $returnType = '\Nopolabs\EBay\Sell\Analytics\Model\Report';
        $request = $this->getTrafficReportRequest($dimension, $filter, $metric, $sort);

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
     * Create request for operation 'getTrafficReport'
     *
     * @param  string $dimension Specifies the basis of the report data. For example: If you specify dimension&#x3D;day and metric&#x3D;CLICK_THROUGH_RATE, the traffic report would contain the number of times a buyer saw a listing impression and then clicked through to the listing page for each day in the date range. If you specify dimension&#x3D;listing and metric&#x3D;LISTING_IMPRESSION_STORE, the traffic report would contain the number of times that listing appeared on the seller&#39;s store. Valid values: &amp;nbsp;&amp;nbsp;DAY &amp;nbsp;&amp;nbsp;LISTING Required: Always (optional)
     * @param  string $filter Limits the report data returned. You can refine the report data returned using the date_range, listing_ids, and marketplace_ids filters. date_range This limits the report to a date range. You can get up a total of 90 days going back as far as 2 years, defined as 365 * 2 days. eBay returns an error (and not data) if you pass in a date range greater than 90 days, or the start date is after the latest date in which traffic data exists (known as the lastUpdatedDate). If the range is beyond the lastUpdatedDate, eBay returns data up to the lastUpdatedDate. Format: YYYYMMDD..YYYYMMDD Maximum range: 90 days Required: Always Note: In the request, the date range must be encoded. For example: %5B20160601..20160828%5D listing_ids This limits the results to a list of listing IDs separated by |. This is for active and sold listings in last 90 days and unsold listings in the last 30 days. Also all the listings must be the seller&#39;s listings and the items must on the specified marketplace. Maximum: 200 Default: 200 Note: In the request, the listing IDs must be encoded. For example: %5B12323232|12321313%5D marketplace_ids The eBay marketplace ID for which you want the report generated (the method currently supports only a single marketplace ID). Valid values: EBAY_AU EBAY_DE EBAY_GB EBAY_US EBAY_MOTORS_US Required if you set the dimension parameter to DAY. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/FilterField.html (optional)
     * @param  string $metric Specifies a comma separated list of the metrics you want included in the report. Valid values: CLICK_THROUGH_RATE The number of times a buyer saw a listing impression and then clicked through to the listing page. Localized name: Click through rate LISTING_IMPRESSION_SEARCH_RESULTS_PAGE The number of times the seller&#39;s listings appeared on the search results page. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from the search results page LISTING_IMPRESSION_STORE The number of times the seller&#39;s listings appeared on the seller&#39;s store. However, the listing might not have been visible to the buyer because of its position on the page. Localized name: Listing impressions from your Store LISTING_IMPRESSION_TOTAL The total number of times the seller&#39;s listings appeared in the search results page or the seller&#39;s store. If the listing appeared in both places, it is counted each time. However, the listing might not have been visible to the buyer because of its position on the page. (LISTING_IMPRESSION_SEARCH_RESULTS_PAGE + LISTING_IMPRESSION_STORE) Localized name: Total listing impressions LISTING_VIEWS_SOURCE_DIRECT The number of times a seller&#39;s listing was viewed directly, such as when a buyer uses a bookmark. Localized name: Direct views LISTING_VIEWS_SOURCE_OFF_EBAY The number of times a seller&#39;s listing was viewed from a site other than eBay, such as when a buyer clicks on a link to the listing from a Google search page. Localized name: Off eBay views LISTING_VIEWS_SOURCE_OTHER_EBAY The number of times a seller&#39;s listing was viewed from an eBay page, other than the search results page or the seller&#39;s store. Localized name: Views from non-search and non-store pages within eBay LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the search results page. Localized name: Views from the search results page LISTING_VIEWS_SOURCE_STORE The number of times a seller&#39;s listing was viewed by clicking on a link that was on the seller&#39;s store. Localized name: Views from your Store LISTING_VIEWS_TOTAL Total number of listings viewed. (LISTING_VIEWS_SOURCE_DIRECT + LISTING_VIEWS_SOURCE_OFF_EBAY + LISTING_VIEWS_SOURCE_OTHER_EBAY + LISTING_VIEWS_SOURCE_SEARCH_RESULTS_PAGE + LISTING_VIEWS_SOURCE_STORE) Localized name: Total views SALES_CONVERSION_RATE The number of transactions divided by the number of listings views. (TRANSACTION / LISTING_VIEWS_TOTAL) Localized name: Sales conversion rate TRANSACTION The number of transactions. Localized name: Transaction count Required: Always (optional)
     * @param  string $sort Specifies a single metric to be sorted and whether you want to sort in ascending or descending order. Specifying a metric in this field, sorts that data in ascending order. To sort in descending order add - in front of the metric. This is helpful when the seller wants to see metrics starting with the greatest number, such as the CLICK_THROUGH_RATE (sort&#x3D;-CLICK_THROUGH_RATE). Default: ascending If null: Sorts by the first metric specified in ascending order Maximum metric: 1 Valid Values: metric values For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/SortField.html (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrafficReportRequest($dimension = null, $filter = null, $metric = null, $sort = null)
    {

        $resourcePath = '/traffic_report';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($dimension !== null) {
            $queryParams['dimension'] = ObjectSerializer::toQueryValue($dimension);
        }
        // query params
        if ($filter !== null) {
            $queryParams['filter'] = ObjectSerializer::toQueryValue($filter);
        }
        // query params
        if ($metric !== null) {
            $queryParams['metric'] = ObjectSerializer::toQueryValue($metric);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort);
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
                ['application/json']
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
