# Nopolabs\EBay\Sell\Marketing\ItemPriceMarkdownApi

All URIs are relative to *https://api.ebay.com/sell/marketing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemPriceMarkdownPromotion**](ItemPriceMarkdownApi.md#createItemPriceMarkdownPromotion) | **POST** /item_price_markdown | 
[**deleteItemPriceMarkdownPromotion**](ItemPriceMarkdownApi.md#deleteItemPriceMarkdownPromotion) | **DELETE** /item_price_markdown/{promotion_id} | 
[**getItemPriceMarkdownPromotion**](ItemPriceMarkdownApi.md#getItemPriceMarkdownPromotion) | **GET** /item_price_markdown/{promotion_id} | 
[**updateItemPriceMarkdownPromotion**](ItemPriceMarkdownApi.md#updateItemPriceMarkdownPromotion) | **PUT** /item_price_markdown/{promotion_id} | 


# **createItemPriceMarkdownPromotion**
> object createItemPriceMarkdownPromotion($body)



This method creates an item price markdown promotion (know simply as a &quot;markdown promotion&quot;) where a discount amount is applied directly to the items included the promotion. Discounts can be specified as either a monetary amount or a percentage off the standard sales price. eBay highlights promoted items by placing teasers for the items throughout the online sales flows. Unlike an item promotion, a markdown promotion does not require the buyer meet a &quot;threshold&quot; before the offer takes effect. With markdown promotions, all the buyer needs to do is purchase the item to receive the promotion benefit. There are two ways to add items to markdown promotions: Key-based promotions select items using either the listing IDs or inventory reference IDs of the items you want to promote. Note that if you use inventory reference IDs, you must specify both the inventoryReferenceId and the associated inventoryReferenceType of the item(s) you want to include the promotion. Rule-based promotions select items using a list of eBay category IDs or seller Store category IDs. Rules can further constrain items in a promotion by minimum and maximum prices, brands, and item conditions. New promotions must be created in either a DRAFT or a SCHEDULED state. Use the DRAFT state when you are initially creating a promotion and you want to be sure it's correctly configured before scheduling it to run. When you create a promotion, the promotion ID is returned in the Location response header. Use this ID to reference the promotion in subsequent requests (such as to schedule a promotion that's in a DRAFT state). Tip: Refer to Promotions Manager in the Selling Integration Guide for details and examples showing how to create and manage seller promotions. Markdown promotions are available on all eBay marketplaces. For more information, see Promotions Manager requirements and restrictions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\ItemPriceMarkdownApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Nopolabs\EBay\Sell\Marketing\Model\ItemPriceMarkdown(); // \Nopolabs\EBay\Sell\Marketing\Model\ItemPriceMarkdown | This type defines the fields that describe an item price markdown promotion.

try {
    $result = $apiInstance->createItemPriceMarkdownPromotion($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPriceMarkdownApi->createItemPriceMarkdownPromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\ItemPriceMarkdown**](../Model/ItemPriceMarkdown.md)| This type defines the fields that describe an item price markdown promotion. | [optional]

### Return type

**object**

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemPriceMarkdownPromotion**
> deleteItemPriceMarkdownPromotion($promotion_id)



This method deletes the item price markdown promotion specified by the promotion_id path parameter. Call getPromotions to retrieve the IDs of a seller's promotions. You can delete any promotion with the exception of those that are currently active (RUNNING). To end a running promotion, call updateItemPriceMarkdownPromotion and adjust the endDate field as appropriate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\ItemPriceMarkdownApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = "promotion_id_example"; // string | The ID of the promotion you want to delete. The promotion ID is a unique eBay-assigned value that's generated when the promotion is created.

try {
    $apiInstance->deleteItemPriceMarkdownPromotion($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemPriceMarkdownApi->deleteItemPriceMarkdownPromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The ID of the promotion you want to delete. The promotion ID is a unique eBay-assigned value that&#39;s generated when the promotion is created. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemPriceMarkdownPromotion**
> \Nopolabs\EBay\Sell\Marketing\Model\ItemPriceMarkdown getItemPriceMarkdownPromotion($promotion_id)



This method returns the complete details of the item price markdown promotion that's indicated by the promotion_id path parameter. Call getPromotions to retrieve the IDs of a seller's promotions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\ItemPriceMarkdownApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = "promotion_id_example"; // string | The ID of the promotion you want to retrieve. The promotion ID is a unique eBay-assigned value that's generated when the promotion is created.

try {
    $result = $apiInstance->getItemPriceMarkdownPromotion($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPriceMarkdownApi->getItemPriceMarkdownPromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The ID of the promotion you want to retrieve. The promotion ID is a unique eBay-assigned value that&#39;s generated when the promotion is created. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\ItemPriceMarkdown**](../Model/ItemPriceMarkdown.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemPriceMarkdownPromotion**
> object updateItemPriceMarkdownPromotion($promotion_id, $body)



This method updates the specified item price markdown promotion with the new configuration that you supply in the payload of the request. Specify the promotion you want to update using the promotion_id path parameter. Call getPromotions to retrieve the IDs of a seller's promotions. When updating a promotion, supply all the fields that you used to configure the original promotion (and not just the fields you are updating). eBay replaces the specified promotion with the values you supply in the update request and if you don't pass a field that currently has a value, the update request fails. The parameters you are allowed to update with this request depend on the status of the promotion you're updating: DRAFT or SCHEDULED promotions: You can update any of the parameters in these promotions that have not yet started to run, including the discountRules. RUNNING promotions: You can change the endDate and the item's inventory but you cannot change the promotional discount or the promotion's start date. ENDED promotions: Nothing can be changed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\ItemPriceMarkdownApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = "promotion_id_example"; // string | The ID of the promotion you want to update. The promotion ID is a unique eBay-assigned value that's generated when the promotion is created.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\ItemPriceMarkdown(); // \Nopolabs\EBay\Sell\Marketing\Model\ItemPriceMarkdown | This type defines the fields that describe an item price markdown promotion.

try {
    $result = $apiInstance->updateItemPriceMarkdownPromotion($promotion_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemPriceMarkdownApi->updateItemPriceMarkdownPromotion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotion_id** | **string**| The ID of the promotion you want to update. The promotion ID is a unique eBay-assigned value that&#39;s generated when the promotion is created. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\ItemPriceMarkdown**](../Model/ItemPriceMarkdown.md)| This type defines the fields that describe an item price markdown promotion. | [optional]

### Return type

**object**

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

