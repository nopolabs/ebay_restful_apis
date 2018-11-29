# Nopolabs\EBay\Sell\Account\PaymentsProgramApi

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentsProgram**](PaymentsProgramApi.md#getPaymentsProgram) | **GET** /payments_program/{marketplace_id}/{payments_program_type} | 


# **getPaymentsProgram**
> \Nopolabs\EBay\Sell\Account\Model\PaymentsProgramResponse getPaymentsProgram($marketplace_id, $payments_program_type)



This method returns whether or not the user is opted-in to the payment program. Sellers opt-in to payment programs by marketplace and you must target a specific marketplace in your requests to this method using the marketplace_id path parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Account\Api\PaymentsProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | This path parameter specifies the eBay marketplace of the payment program for which you want to retrieve the seller's status.
$payments_program_type = "payments_program_type_example"; // string | This path parameter specifies the payments program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use.

try {
    $result = $apiInstance->getPaymentsProgram($marketplace_id, $payments_program_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsProgramApi->getPaymentsProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This path parameter specifies the eBay marketplace of the payment program for which you want to retrieve the seller&#39;s status. |
 **payments_program_type** | **string**| This path parameter specifies the payments program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use. |

### Return type

[**\Nopolabs\EBay\Sell\Account\Model\PaymentsProgramResponse**](../Model/PaymentsProgramResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

