# Nopolabs\EBay\Sell\Analytics\SellerStandardsProfileApi

All URIs are relative to *https://api.ebay.com/sell/analytics/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findSellerStandardsProfiles**](SellerStandardsProfileApi.md#findSellerStandardsProfiles) | **GET** /seller_standards_profile | 
[**getSellerStandardsProfile**](SellerStandardsProfileApi.md#getSellerStandardsProfile) | **GET** /seller_standards_profile/{program}/{cycle} | 


# **findSellerStandardsProfiles**
> \Nopolabs\EBay\Sell\Analytics\Model\FindSellerStandardsProfilesResponse findSellerStandardsProfiles()



This call retrieves all the profiles for the associated seller.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Analytics\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Analytics\Api\SellerStandardsProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findSellerStandardsProfiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellerStandardsProfileApi->findSellerStandardsProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Nopolabs\EBay\Sell\Analytics\Model\FindSellerStandardsProfilesResponse**](../Model/FindSellerStandardsProfilesResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSellerStandardsProfile**
> \Nopolabs\EBay\Sell\Analytics\Model\StandardsProfile getSellerStandardsProfile($cycle, $program)



This call retrieves seller's profiles based on a program or cycle. Each program has one or two cycles (CURRENT or PROJECTED), where each cycle is limited to a single profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Analytics\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Analytics\Api\SellerStandardsProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cycle = "cycle_example"; // string | Specifies the cycle of the requested profile.
$program = "program_example"; // string | Specifies the program of the requested profile.

try {
    $result = $apiInstance->getSellerStandardsProfile($cycle, $program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellerStandardsProfileApi->getSellerStandardsProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cycle** | **string**| Specifies the cycle of the requested profile. |
 **program** | **string**| Specifies the program of the requested profile. |

### Return type

[**\Nopolabs\EBay\Sell\Analytics\Model\StandardsProfile**](../Model/StandardsProfile.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

