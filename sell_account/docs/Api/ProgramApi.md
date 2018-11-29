# Nopolabs\EBay\Sell\Account\ProgramApi

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOptedInPrograms**](ProgramApi.md#getOptedInPrograms) | **GET** /program/get_opted_in_programs | 
[**optInToProgram**](ProgramApi.md#optInToProgram) | **POST** /program/opt_in | 
[**optOutOfProgram**](ProgramApi.md#optOutOfProgram) | **POST** /program/opt_out | 


# **getOptedInPrograms**
> \Nopolabs\EBay\Sell\Account\Model\Programs getOptedInPrograms()



This method gets a list of the seller programs that the seller has opted-in to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Account\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOptedInPrograms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->getOptedInPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Nopolabs\EBay\Sell\Account\Model\Programs**](../Model/Programs.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optInToProgram**
> object optInToProgram($body)



This method opts the seller in to an eBay seller program. Currently available programs include the Out of Stock Control and the Selling Policy Management program. When you opt-in to the SELLING_POLICY_MANAGEMENT, eBay can associate the business policies you create with the items you list. Note: It can take up to 24-hours for eBay to process your request to opt-in to a Seller Program. Use the getOptedInPrograms call to check the status of your request after a processing period has passed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Account\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Nopolabs\EBay\Sell\Account\Model\Program(); // \Nopolabs\EBay\Sell\Account\Model\Program | Program being opted-in to.

try {
    $result = $apiInstance->optInToProgram($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->optInToProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Nopolabs\EBay\Sell\Account\Model\Program**](../Model/Program.md)| Program being opted-in to. |

### Return type

**object**

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optOutOfProgram**
> object optOutOfProgram($body)



This method opts the seller out of a seller program to which you have previously opted-in to. Get a list of the seller programs you have opted-in to using the getOptedInPrograms call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Account\Api\ProgramApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Nopolabs\EBay\Sell\Account\Model\Program(); // \Nopolabs\EBay\Sell\Account\Model\Program | Program being opted-out of.

try {
    $result = $apiInstance->optOutOfProgram($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->optOutOfProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Nopolabs\EBay\Sell\Account\Model\Program**](../Model/Program.md)| Program being opted-out of. |

### Return type

**object**

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

