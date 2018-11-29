# Nopolabs\EBay\Sell\Marketing\PromotionReportApi

All URIs are relative to *https://api.ebay.com/sell/marketing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPromotionReports**](PromotionReportApi.md#getPromotionReports) | **GET** /promotion_report | 


# **getPromotionReports**
> \Nopolabs\EBay\Sell\Marketing\Model\PromotionsReportPagedCollection getPromotionReports($marketplace_id, $limit, $offset, $promotion_status, $q)



This method generates a report that lists the seller's running, paused, and ended promotions for the specified eBay marketplace. The result set can be filtered by the promotion status and the number of results to return. You can also supply keywords to limit the report to promotions that contain the specified keywords. Specify the eBay marketplace for which you want the report run using the marketplace_id query parameter. Supply additional query parameters to control the report as needed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\PromotionReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | The eBay marketplace ID of the site for which you want the promotions report. Valid values: EBAY_AU = Australia EBAY_DE = Germany EBAY_ES = Spain EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US = United States
$limit = "limit_example"; // string | Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200
$offset = "offset_example"; // string | Specifies the number of promotions to skip in the returned result set. Use this query parameter with the limit parameter to control the pagination of the output. If you supply an offset of 0 and a limit of 10, the response contains promotions 1-10 from the list of the associated promotions the call retrieved. If the offset is 10 and limit is 10, the response contains promotions 11-20 from the list of associated promotions. Default: 0
$promotion_status = "promotion_status_example"; // string | Limits the results to the promotions that are in the state specified by this query parameter. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of values supported: 1
$q = "q_example"; // string | A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &quot;iPhone&quot; or &quot;Harry Potter.&quot; Commas that separate keywords are ignored. For example, a keyword string of &quot;iPhone, iPad&quot; equals &quot;iPhone iPad&quot;, and each results in a response that contains promotions with both &quot;iPhone&quot; and &quot;iPad&quot; in the title.

try {
    $result = $apiInstance->getPromotionReports($marketplace_id, $limit, $offset, $promotion_status, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionReportApi->getPromotionReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The eBay marketplace ID of the site for which you want the promotions report. Valid values: EBAY_AU &#x3D; Australia EBAY_DE &#x3D; Germany EBAY_ES &#x3D; Spain EBAY_FR &#x3D; France EBAY_GB &#x3D; Great Britain EBAY_IT &#x3D; Italy EBAY_US &#x3D; United States |
 **limit** | **string**| Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 | [optional]
 **offset** | **string**| Specifies the number of promotions to skip in the returned result set. Use this query parameter with the limit parameter to control the pagination of the output. If you supply an offset of 0 and a limit of 10, the response contains promotions 1-10 from the list of the associated promotions the call retrieved. If the offset is 10 and limit is 10, the response contains promotions 11-20 from the list of associated promotions. Default: 0 | [optional]
 **promotion_status** | **string**| Limits the results to the promotions that are in the state specified by this query parameter. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of values supported: 1 | [optional]
 **q** | **string**| A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &amp;quot;iPhone&amp;quot; or &amp;quot;Harry Potter.&amp;quot; Commas that separate keywords are ignored. For example, a keyword string of &amp;quot;iPhone, iPad&amp;quot; equals &amp;quot;iPhone iPad&amp;quot;, and each results in a response that contains promotions with both &amp;quot;iPhone&amp;quot; and &amp;quot;iPad&amp;quot; in the title. | [optional]

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\PromotionsReportPagedCollection**](../Model/PromotionsReportPagedCollection.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

