# Nopolabs\EBay\Sell\Logistics\ShipmentApi

All URIs are relative to *https://api.ebay.com/sell/logistics/v1_beta*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment**](ShipmentApi.md#cancelShipment) | **POST** /shipment/{shipmentId}/cancel | 
[**createFromShippingQuote**](ShipmentApi.md#createFromShippingQuote) | **POST** /shipment/create_from_shipping_quote | 
[**downloadLabelFile**](ShipmentApi.md#downloadLabelFile) | **GET** /shipment/{shipmentId}/download_label_file | 
[**getShipment**](ShipmentApi.md#getShipment) | **GET** /shipment/{shipmentId} | 


# **cancelShipment**
> \Nopolabs\EBay\Sell\Logistics\Model\Shipment cancelShipment($shipment_id)



This method cancels the shipment associated with the specified shipment ID and the associated shipping label is deleted. When you cancel a shipment, the totalShippingCost of the canceled shipment is refunded to the account established by the user's billing agreement. Note that you cannot cancel a shipment if you have used the associated shipping label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Logistics\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Logistics\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = "shipment_id_example"; // string | This path parameter specifies the unique eBay-assigned ID of the shipment to be canceled. The shipmentId value is generated and returned by a call to createFromShippingQuote.

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| This path parameter specifies the unique eBay-assigned ID of the shipment to be canceled. The shipmentId value is generated and returned by a call to createFromShippingQuote. |

### Return type

[**\Nopolabs\EBay\Sell\Logistics\Model\Shipment**](../Model/Shipment.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFromShippingQuote**
> \Nopolabs\EBay\Sell\Logistics\Model\Shipment createFromShippingQuote($body)



This method creates a &quot;shipment&quot; based on the shippingQuoteId and rateId values supplied in the request. The rate identified by the rateId value specifies the carrier and service for the package shipment, and the rate ID must be contained in the shipping quote identified by the shippingQuoteId value. Call createShippingQuote to retrieve a set of live shipping rates. When you create a shipment, eBay generates a shipping label that you can download and use to ship your package. In a createFromShippingQuote request, sellers can include a list of shipping options they want to add to the base service quoted in the selected rate. The list of available shipping options is specific to each quoted rate and if available, the options are listed in the rate container of the of the shipping quote. In addition to a configurable return-to location and other details about the shipment, the response to this method includes: The shipping carrier and service to be used for the package shipment A list of selected shipping options, if any The shipment tracking number The total shipping cost (the sum cost of the base shipping service and any added options) When you create a shipment, your billing agreement account is charged the sum of the baseShippingCost and the total cost of any additional shipping options you might have selected. Use the URL returned in labelDownloadUrl field, or call downloadLabelFile with the shipmentId value from the response, to download a shipping label for your package. Important! Sellers must set up their payment method with eBay before they can use this method to create a shipment and the associated shipping label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Logistics\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Logistics\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Nopolabs\EBay\Sell\Logistics\Model\CreateShipmentFromQuoteRequest(); // \Nopolabs\EBay\Sell\Logistics\Model\CreateShipmentFromQuoteRequest | The create shipment from quote request.

try {
    $result = $apiInstance->createFromShippingQuote($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->createFromShippingQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Nopolabs\EBay\Sell\Logistics\Model\CreateShipmentFromQuoteRequest**](../Model/CreateShipmentFromQuoteRequest.md)| The create shipment from quote request. |

### Return type

[**\Nopolabs\EBay\Sell\Logistics\Model\Shipment**](../Model/Shipment.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadLabelFile**
> string[] downloadLabelFile($shipment_id)



This method returns the shipping label file that was generated for the shipmentId value specified in the request. Call createFromShippingQuote to generate a shipment ID. Use the Accept HTTP header to specify the format of the returned file. The default file format is a PDF file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Logistics\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Logistics\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = "shipment_id_example"; // string | This path parameter specifies the unique eBay-assigned ID of the shipment associated with the shipping label you want to download. The shipmentId value is generated and returned by a call to createFromShippingQuote.

try {
    $result = $apiInstance->downloadLabelFile($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->downloadLabelFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| This path parameter specifies the unique eBay-assigned ID of the shipment associated with the shipping label you want to download. The shipmentId value is generated and returned by a call to createFromShippingQuote. |

### Return type

**string[]**

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShipment**
> \Nopolabs\EBay\Sell\Logistics\Model\Shipment getShipment($shipment_id)



This method retrieves the shipment details for the specified shipment ID. Call createFromShippingQuote to generate a shipment ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Logistics\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Logistics\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_id = "shipment_id_example"; // string | This path parameter specifies the unique eBay-assigned ID of the shipment you want to retrieve. The shipmentId value is generated and returned by a call to createFromShippingQuote.

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| This path parameter specifies the unique eBay-assigned ID of the shipment you want to retrieve. The shipmentId value is generated and returned by a call to createFromShippingQuote. |

### Return type

[**\Nopolabs\EBay\Sell\Logistics\Model\Shipment**](../Model/Shipment.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

