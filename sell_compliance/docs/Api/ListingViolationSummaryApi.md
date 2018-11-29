# Nopolabs\EBay\Sell\Compliance\ListingViolationSummaryApi

All URIs are relative to *https://api.ebay.com/sell/compliance/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getListingViolationsSummary**](ListingViolationSummaryApi.md#getListingViolationsSummary) | **GET** /listing_violation_summary | getListingViolationsSummary


# **getListingViolationsSummary**
> \Nopolabs\EBay\Sell\Compliance\Model\ComplianceSummary getListingViolationsSummary($x_ebay_c_marketplace_id, $compliance_type)

getListingViolationsSummary

This call returns listing violation counts for a seller. A user can pass in one or more compliance types through the compliance_type query parameter. See ComplianceTypeEnum for more information on the three different compliance types. Listing violations are returned for multiple marketplaces if the seller sells on multiple eBay marketplaces. Note: Only a canned response for this call will be returned in the Sandbox environment, so the non-compliant listing count will not be specific to the seller.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Compliance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Compliance\Api\ListingViolationSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = "x_ebay_c_marketplace_id_example"; // string | Use this header to specify the eBay marketplace identifier. Supported values for this header can be found in the MarketplaceIdEnum type definition. Note that Version 1.1.0 of the Compliance API is only supported on the US, UK, Australia, Canada {English), and Germany sites.
$compliance_type = "compliance_type_example"; // string | A user passes in one or more compliance type values through this query parameter. See ComplianceTypeEnum for more information on the compliance types that can be passed in here. If more than one compliance type value is used, delimit these values with a comma. If no compliance type values are passed in, the listing count for all compliance types will be returned.

try {
    $result = $apiInstance->getListingViolationsSummary($x_ebay_c_marketplace_id, $compliance_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingViolationSummaryApi->getListingViolationsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| Use this header to specify the eBay marketplace identifier. Supported values for this header can be found in the MarketplaceIdEnum type definition. Note that Version 1.1.0 of the Compliance API is only supported on the US, UK, Australia, Canada {English), and Germany sites. | [optional]
 **compliance_type** | **string**| A user passes in one or more compliance type values through this query parameter. See ComplianceTypeEnum for more information on the compliance types that can be passed in here. If more than one compliance type value is used, delimit these values with a comma. If no compliance type values are passed in, the listing count for all compliance types will be returned. | [optional]

### Return type

[**\Nopolabs\EBay\Sell\Compliance\Model\ComplianceSummary**](../Model/ComplianceSummary.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

