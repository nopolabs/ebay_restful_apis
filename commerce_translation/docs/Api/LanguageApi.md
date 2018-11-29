# Nopolabs\EBay\Commerce\Translation\LanguageApi

All URIs are relative to *https://apid.ebay.com/commerce/translation/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**translate**](LanguageApi.md#translate) | **POST** /translate | 


# **translate**
> \Nopolabs\EBay\Commerce\Translation\Model\TranslateResponse translate($body)



Translates input text into the specified language.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Nopolabs\EBay\Commerce\Translation\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Commerce\Translation\Api\LanguageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Nopolabs\EBay\Commerce\Translation\Model\TranslateRequest(); // \Nopolabs\EBay\Commerce\Translation\Model\TranslateRequest | 

try {
    $result = $apiInstance->translate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguageApi->translate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Nopolabs\EBay\Commerce\Translation\Model\TranslateRequest**](../Model/TranslateRequest.md)|  |

### Return type

[**\Nopolabs\EBay\Commerce\Translation\Model\TranslateResponse**](../Model/TranslateResponse.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

