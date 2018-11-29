# Nopolabs\EBay\Commerce\Catalog\ProductApi

All URIs are relative to *https://api.ebay.com/commerce/catalog/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProduct**](ProductApi.md#getProduct) | **GET** /product/{epid} | 


# **getProduct**
> \Nopolabs\EBay\Commerce\Catalog\Model\Product getProduct($epid)



This call retrieves details of the catalog product identified by the eBay product identifier (ePID) specified in the request. These details include the product's title and description, aspects and their values, associated images, applicable category IDs, and any recognized identifiers that apply to the product. For a new listing, you can use the search call to identify candidate products on which to base the listing, then use the getProduct call to present the full details of those candidate products to the seller to makea a final selection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Commerce\Catalog\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Commerce\Catalog\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epid = "epid_example"; // string | The ePID of the product being requested. This value can be discovered by issuing the search call and examining the value of the productSummaries.epid field for the desired returned product summary.

try {
    $result = $apiInstance->getProduct($epid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epid** | **string**| The ePID of the product being requested. This value can be discovered by issuing the search call and examining the value of the productSummaries.epid field for the desired returned product summary. |

### Return type

[**\Nopolabs\EBay\Commerce\Catalog\Model\Product**](../Model/Product.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

