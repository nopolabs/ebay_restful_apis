# Nopolabs\EBay\Sell\Marketing\PromotionApi

All URIs are relative to *https://api.ebay.com/sell/marketing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListingSet**](PromotionApi.md#getListingSet) | **GET** /promotion/{promotion_id}/get_listing_set | 
[**getPromotions**](PromotionApi.md#getPromotions) | **GET** /promotion | 
[**pausePromotion**](PromotionApi.md#pausePromotion) | **POST** /promotion/{promotion_id}/pause | 
[**resumePromotion**](PromotionApi.md#resumePromotion) | **POST** /promotion/{promotion_id}/resume | 


# **getListingSet**
> getListingSet($promotion_id, $limit, $offset, $q, $sort, $status)



This method returns the set of listings associated with the promotion_id specified in the path parameter. Call getPromotions to retrieve the IDs of a seller's promotions. The listing details are returned in a paginated set and you can control and results returned using the following query parameters: limit, offset, q, sort, and status. Maximum associated listings returned: 200 Default number of listings returned: 200

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = "promotion_id_example"; // string | The ID of the promotion whose associated listings you want to retrieve. The promotion ID is a unique eBay-assigned value that's generated when the promotion is created.
$limit = "limit_example"; // string | Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200
$offset = "offset_example"; // string | Specifies the number of promotions to skip in the returned result set. Use this query parameter with the limit parameter to control the pagination of the output. If you supply an offset of 0 and a limit of 10, the response contains promotions 1-10 from the list of promotions retrieved by the call. If the offset is 10 and limit is 20, the response contains promotions 11-30 from the list of retrieved promotions. Default: 0
$q = "q_example"; // string | Reserved for future use.
$sort = "sort_example"; // string | Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order. Example: &nbsp;&nbsp;&nbsp;sort=PRICE - Sorts the associated listings by their current price in ascending order &nbsp;&nbsp;&nbsp;sort=-TITLE - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a) Valid values: AVAILABLE PRICE TITLE For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/marketing/types/SortField.html
$status = "status_example"; // string | This query parameter applies only to markdown promotions. It filters the response based on the indicated status of the promotion. Currently, the only supported value for this parameter is MARKED_DOWN, which indicates active markdown promotions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/marketing/types/ItemMarkdownStatusTypeEnum.html

try {
    $apiInstance->getListingSet($promotion_id, $limit, $offset, $q, $sort, $status);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getListingSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The ID of the promotion whose associated listings you want to retrieve. The promotion ID is a unique eBay-assigned value that&#39;s generated when the promotion is created. |
 **limit** | **string**| Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 | [optional]
 **offset** | **string**| Specifies the number of promotions to skip in the returned result set. Use this query parameter with the limit parameter to control the pagination of the output. If you supply an offset of 0 and a limit of 10, the response contains promotions 1-10 from the list of promotions retrieved by the call. If the offset is 10 and limit is 20, the response contains promotions 11-30 from the list of retrieved promotions. Default: 0 | [optional]
 **q** | **string**| Reserved for future use. | [optional]
 **sort** | **string**| Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order. Example: &amp;nbsp;&amp;nbsp;&amp;nbsp;sort&#x3D;PRICE - Sorts the associated listings by their current price in ascending order &amp;nbsp;&amp;nbsp;&amp;nbsp;sort&#x3D;-TITLE - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a) Valid values: AVAILABLE PRICE TITLE For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/marketing/types/SortField.html | [optional]
 **status** | **string**| This query parameter applies only to markdown promotions. It filters the response based on the indicated status of the promotion. Currently, the only supported value for this parameter is MARKED_DOWN, which indicates active markdown promotions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/marketing/types/ItemMarkdownStatusTypeEnum.html | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotions**
> \Nopolabs\EBay\Sell\Marketing\Model\PromotionsPagedCollection getPromotions($marketplace_id, $limit, $offset, $promotion_status, $q, $sort)



This method returns a list of a seller's undeleted promotions. The call returns up to 200 currently-available promotions on the specified marketplace. While the response body does not include the promotion's discountRules or inventoryCriterion containers, it does include the promotionHref (which you can use to retrieve the complete details of the promotion). Use query parameters to sort and filter the results by the number of promotions to return, the promotion state, and the eBay marketplace. You can also supply keywords to limit the response to the promotions that contain that keywords in the title of the promotion. Maximum returned: 200

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | The eBay marketplace ID of the site where the promotion is hosted. Valid values: EBAY_AU = Australia EBAY_DE = Germany EBAY_ES = Spain EBAY_FR = France EBAY_GB = Great Britain EBAY_IT = Italy EBAY_US = United States
$limit = "limit_example"; // string | Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200
$offset = "offset_example"; // string | Specifies the number of promotions to skip in the returned result set. Use this query parameter with the limit parameter to control the pagination of the output. If you supply an offset of 0 and a limit of 10, the response contains promotions 1-10 from the list of the associated promotions the call retrieved. If the offset is 10 and limit is 10, the response contains promotions 11-20 from the list of associated promotions. Default: 0
$promotion_status = "promotion_status_example"; // string | Specifies the promotion state by which you want to filter the results. The response contains only those promotions that match the state you specify. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of input values: 1
$q = "q_example"; // string | A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &quot;iPhone&quot; or &quot;Harry Potter.&quot; Commas that separate keywords are ignored. For example, a keyword string of &quot;iPhone, iPad&quot; equals &quot;iPhone iPad&quot;, and each results in a response that contains promotions with both &quot;iPhone&quot; and &quot;iPad&quot; in the title.
$sort = "sort_example"; // string | Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order. Example: &nbsp;&nbsp;&nbsp;sort=END_DATE &nbsp; Sorts the promotions in the response by their end dates in ascending order &nbsp;&nbsp;&nbsp;sort=-PROMOTION_NAME &nbsp; Sorts the promotions by their promotion name in descending alphabetical order (Z-Az-a) Valid values: START_DATE END_DATE PROMOTION_NAME For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/marketing/types/SortField.html

try {
    $result = $apiInstance->getPromotions($marketplace_id, $limit, $offset, $promotion_status, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->getPromotions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The eBay marketplace ID of the site where the promotion is hosted. Valid values: EBAY_AU &#x3D; Australia EBAY_DE &#x3D; Germany EBAY_ES &#x3D; Spain EBAY_FR &#x3D; France EBAY_GB &#x3D; Great Britain EBAY_IT &#x3D; Italy EBAY_US &#x3D; United States |
 **limit** | **string**| Specifies the maximum number of promotions returned on a page from the result set. Default: 200 Maximum: 200 | [optional]
 **offset** | **string**| Specifies the number of promotions to skip in the returned result set. Use this query parameter with the limit parameter to control the pagination of the output. If you supply an offset of 0 and a limit of 10, the response contains promotions 1-10 from the list of the associated promotions the call retrieved. If the offset is 10 and limit is 10, the response contains promotions 11-20 from the list of associated promotions. Default: 0 | [optional]
 **promotion_status** | **string**| Specifies the promotion state by which you want to filter the results. The response contains only those promotions that match the state you specify. Valid values: DRAFT SCHEDULED RUNNING PAUSED ENDEDMaximum number of input values: 1 | [optional]
 **q** | **string**| A string consisting of one or more keywords. eBay filters the response by returning only the promotions that contain the supplied keywords in the promotion title. Example: &amp;quot;iPhone&amp;quot; or &amp;quot;Harry Potter.&amp;quot; Commas that separate keywords are ignored. For example, a keyword string of &amp;quot;iPhone, iPad&amp;quot; equals &amp;quot;iPhone iPad&amp;quot;, and each results in a response that contains promotions with both &amp;quot;iPhone&amp;quot; and &amp;quot;iPad&amp;quot; in the title. | [optional]
 **sort** | **string**| Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order. Example: &amp;nbsp;&amp;nbsp;&amp;nbsp;sort&#x3D;END_DATE &amp;nbsp; Sorts the promotions in the response by their end dates in ascending order &amp;nbsp;&amp;nbsp;&amp;nbsp;sort&#x3D;-PROMOTION_NAME &amp;nbsp; Sorts the promotions by their promotion name in descending alphabetical order (Z-Az-a) Valid values: START_DATE END_DATE PROMOTION_NAME For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/marketing/types/SortField.html | [optional]

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\PromotionsPagedCollection**](../Model/PromotionsPagedCollection.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pausePromotion**
> pausePromotion($promotion_id)



This method pauses a currently-active (RUNNING) threshold promotion and changes the state of the promotion from RUNNING to PAUSED. Pausing a promotion makes the promotion temporarily unavailable to buyers and any currently-incomplete transactions will not receive the promotional offer until the promotion is resumed. Also, promotion teasers are not displayed when a promotion is paused. Pass the ID of the promotion you want to pause using the promotion_id path parameter. Call getPromotions to retrieve the IDs of the seller's promotions. Note: You can only pause threshold promotions (you cannot pause markdown promotions).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = "promotion_id_example"; // string | Identifier of the promotion you want to pause. The ID is a unique eBay-assigned value that's generated when the promotion is created.

try {
    $apiInstance->pausePromotion($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->pausePromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| Identifier of the promotion you want to pause. The ID is a unique eBay-assigned value that&#39;s generated when the promotion is created. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resumePromotion**
> resumePromotion($promotion_id)



This method restarts a threshold promotion that was previously paused and changes the state of the promotion from PAUSED to RUNNING. Only promotions that have been previously paused can be resumed. Resuming a promotion reinstates the promotional teasers and any transactions that were in motion before the promotion was paused will again be eligible for the promotion. Pass the ID of the promotion you want to resume using the promotion_id path parameter. Call getPromotions to retrieve the IDs of the seller's promotions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = "promotion_id_example"; // string | Identifier of the promotion you want to make active. The ID is a unique eBay-assigned value that's generated when the promotion is created.

try {
    $apiInstance->resumePromotion($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->resumePromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| Identifier of the promotion you want to make active. The ID is a unique eBay-assigned value that&#39;s generated when the promotion is created. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

