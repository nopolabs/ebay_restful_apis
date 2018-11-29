# Nopolabs\EBay\Sell\Logistics\ShippingQuoteApi

All URIs are relative to *https://api.ebay.com/sell/logistics/v1_beta*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingQuote**](ShippingQuoteApi.md#createShippingQuote) | **POST** /shipping_quote | 
[**getShippingQuote**](ShippingQuoteApi.md#getShippingQuote) | **GET** /shipping_quote/{shippingQuoteId} | 


# **createShippingQuote**
> \Nopolabs\EBay\Sell\Logistics\Model\ShippingQuote createShippingQuote($body)



The createShippingQuote method returns a shipping quote that contains a list of live &quot;rates.&quot; Each rate represents an offer made by a shipping carrier for a specific service and each offer has a live quote for the base service cost. Rates have a time window in which they are &quot;live,&quot; and rates expire when their purchase window ends. If offered by the carrier, rates can include shipping options (and their associated prices), and users can add any offered shipping option to the base service should they desire. Also, depending on the services required, rates can also include pickup and delivery windows. Each rate is for a single package and is based on the following information: The shipping origin The shipping destination The package size (weight and dimensions) Rates are identified by a unique eBay-assigned rateId and rates are based on price points, pickup and delivery time frames, and other user requirements. Because each rate offered must be compliant with the eBay shipping program, all rates reflect eBay-negotiated prices. The various rates returned in a shipping quote offer the user a choice from which they can choose a shipping service that best fits their needs. Select the rate for your shipment and using the associated rateId, call cerateFromShippingQuote to create a shipment and generate a shipping label that you can use to ship the package.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Logistics\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Logistics\Api\ShippingQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Nopolabs\EBay\Sell\Logistics\Model\ShippingQuoteRequest(); // \Nopolabs\EBay\Sell\Logistics\Model\ShippingQuoteRequest | The request object for createShippingQuote.

try {
    $result = $apiInstance->createShippingQuote($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingQuoteApi->createShippingQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Nopolabs\EBay\Sell\Logistics\Model\ShippingQuoteRequest**](../Model/ShippingQuoteRequest.md)| The request object for createShippingQuote. |

### Return type

[**\Nopolabs\EBay\Sell\Logistics\Model\ShippingQuote**](../Model/ShippingQuote.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingQuote**
> \Nopolabs\EBay\Sell\Logistics\Model\ShippingQuote getShippingQuote($shipping_quote_id)



This method retrieves the complete details of the shipping quote associated with the specified shippingQuoteId value. A &quot;shipping quote&quot; pertains to a single specific package and contains a set of shipping &quot;rates&quot; that quote the cost to ship the package by different shipping carriers and services. The quotes are based on the package's origin, destination, and size. Call createShippingQuote to create a shippingQuoteId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Logistics\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Logistics\Api\ShippingQuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_quote_id = "shipping_quote_id_example"; // string | This path parameter specifies the unique eBay-assigned ID of the shipping quote you want to retrieve. The shippingQuoteId value is generated and returned by a call to createShippingQuote.

try {
    $result = $apiInstance->getShippingQuote($shipping_quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingQuoteApi->getShippingQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_quote_id** | **string**| This path parameter specifies the unique eBay-assigned ID of the shipping quote you want to retrieve. The shippingQuoteId value is generated and returned by a call to createShippingQuote. |

### Return type

[**\Nopolabs\EBay\Sell\Logistics\Model\ShippingQuote**](../Model/ShippingQuote.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

