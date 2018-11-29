# Nopolabs\EBay\Sell\Inventory\ProductCompatibilityApi

All URIs are relative to *https://api.ebay.com/sell/inventory/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrReplaceProductCompatibility**](ProductCompatibilityApi.md#createOrReplaceProductCompatibility) | **PUT** /inventory_item/{sku}/product_compatibility | 
[**deleteProductCompatibility**](ProductCompatibilityApi.md#deleteProductCompatibility) | **DELETE** /inventory_item/{sku}/product_compatibility | 
[**getProductCompatibility**](ProductCompatibilityApi.md#getProductCompatibility) | **GET** /inventory_item/{sku}/product_compatibility | 


# **createOrReplaceProductCompatibility**
> \Nopolabs\EBay\Sell\Inventory\Model\BaseResponse createOrReplaceProductCompatibility($sku, $content_language, $body)



This call is used by the seller to create or replace a list of products that are compatible with the inventory item. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.<br /><br /><p>In addition to the <code>authorization</code> header, which is required for all eBay REST API calls, the <strong>createOrReplaceProductCompatibility</strong> call also requires the <code>Content-Language</code> header, that sets the natural language that will be used in the field values of the request payload. For US English, the code value passed in this header should be <code>en-US</code>. To view other supported <code>Content-Language</code> values, and to read more about all supported HTTP headers for eBay REST API calls, see the <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a> topic in the <strong>Using eBay RESTful APIs</strong> document.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Inventory\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Inventory\Api\ProductCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | A SKU (stock keeping unit) is an unique identifier defined by a seller for a product
$content_language = "content_language_example"; // string | This request header sets the natural language that will be provided in the field values of the request payload.
$body = new \Nopolabs\EBay\Sell\Inventory\Model\Compatibility(); // \Nopolabs\EBay\Sell\Inventory\Model\Compatibility | Details of the compatibility

try {
    $result = $apiInstance->createOrReplaceProductCompatibility($sku, $content_language, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCompatibilityApi->createOrReplaceProductCompatibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| A SKU (stock keeping unit) is an unique identifier defined by a seller for a product |
 **content_language** | **string**| This request header sets the natural language that will be provided in the field values of the request payload. |
 **body** | [**\Nopolabs\EBay\Sell\Inventory\Model\Compatibility**](../Model/Compatibility.md)| Details of the compatibility |

### Return type

[**\Nopolabs\EBay\Sell\Inventory\Model\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductCompatibility**
> deleteProductCompatibility($sku)



This call is used by the seller to delete the list of products that are compatible with the inventory item that is associated with the compatible product list. The inventory item is identified with a SKU value in the URI. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Inventory\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Inventory\Api\ProductCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | A SKU (stock keeping unit) is an unique identifier defined by a seller for a product

try {
    $apiInstance->deleteProductCompatibility($sku);
} catch (Exception $e) {
    echo 'Exception when calling ProductCompatibilityApi->deleteProductCompatibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| A SKU (stock keeping unit) is an unique identifier defined by a seller for a product |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCompatibility**
> \Nopolabs\EBay\Sell\Inventory\Model\Compatibility getProductCompatibility($sku)



This call is used by the seller to retrieve the list of products that are compatible with the inventory item. The SKU value for the inventory item is passed into the call URI, and a successful call with return the compatible vehicle list associated with this inventory item. Product compatibility is currently only applicable to motor vehicle parts and accessory categories, but more categories may be supported in the future.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Inventory\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Inventory\Api\ProductCompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | A SKU (stock keeping unit) is an unique identifier defined by a seller for a product

try {
    $result = $apiInstance->getProductCompatibility($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCompatibilityApi->getProductCompatibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**| A SKU (stock keeping unit) is an unique identifier defined by a seller for a product |

### Return type

[**\Nopolabs\EBay\Sell\Inventory\Model\Compatibility**](../Model/Compatibility.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

