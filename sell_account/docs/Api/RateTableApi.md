# Nopolabs\EBay\Sell\Account\RateTableApi

All URIs are relative to *https://api.ebay.com/sell/account/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRateTables**](RateTableApi.md#getRateTables) | **GET** /rate_table/ | 


# **getRateTables**
> \Nopolabs\EBay\Sell\Account\Model\RateTableResponse getRateTables($country_code)



This method retrieves a seller's shipping rate tables for the country specified in the country_code query parameter. If no country code is specified, the call returns all shipping rate tables that have been assigned a rateTableId (to assign an ID to an older rate table, call this method using the table's country code). The method's response includes a rateTableId for each table defined by the seller. Use a table's ID value in a fulfillment policy to specify the shipping rate table to use for that policy's DOMESTIC or INTERNATIONAL shipping option (make sure the locality of the rate table matches the optionType of the shipping option). Sellers can define up to 40 shipping rate tables for their account, which lets them set up different rate tables for each of the marketplaces they sell into. Go to My eBay &gt; Account &gt; Site Preferences to create and maintain the rate tables. For more, see Using shipping rate tables. If you're using the Trading API, use the rate table ID values in the RateTableDetails container of the Add/Revise/Relist calls. If the locality for a rate table is set to DOMESTIC, pass the ID value in the RateTableDetails.DomesticRateTableId field. Otherwise, if locality is INTERNATIONAL, pass the ID value in RateTableDetails.InternationalRateTableId. Note: For regions that are not yet ramped up with multi-rate table support, this method returns an ID that maps to the seller's default rate table for the country specified. Currently, only the US and AU marketplaces support the extended multi-rate table functionality.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Account\Api\RateTableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | This query parameter specifies the two-letter ISO 3166-1 Alpha-2 code of country for which you want shipping-rate table information. If you do not specify a county code, the request returns all the seller-defined rate tables. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/CountryCodeEnum.html

try {
    $result = $apiInstance->getRateTables($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateTableApi->getRateTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| This query parameter specifies the two-letter ISO 3166-1 Alpha-2 code of country for which you want shipping-rate table information. If you do not specify a county code, the request returns all the seller-defined rate tables. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/account/types/CountryCodeEnum.html | [optional]

### Return type

[**\Nopolabs\EBay\Sell\Account\Model\RateTableResponse**](../Model/RateTableResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

