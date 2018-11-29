# Nopolabs\EBay\Commerce\Catalog\ProductMetadataApi

All URIs are relative to *https://api.ebay.com/commerce/catalog/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductMetadata**](ProductMetadataApi.md#getProductMetadata) | **GET** /get_product_metadata | 
[**getProductMetadataForCategories**](ProductMetadataApi.md#getProductMetadataForCategories) | **GET** /get_product_metadata_for_categories | 


# **getProductMetadata**
> \Nopolabs\EBay\Commerce\Catalog\Model\ProductMetadata getProductMetadata($epid, $x_ebay_c_marketplace_id, $accept_language, $other_applicable_category_ids, $primary_category_id)



This call retrieves an array of all supported aspects, aspect constraints, and aspect values for the specified catalog product and its associated or suggested categories, as well as the values currently associated with that product. The array is a union (with duplicates removed) of all returned aspects. After using the search and getProduct calls to find a catalog product that matches a seller's inventory item, you may discover a matching product, but determine that one or more product details are missing or inaccurate. You can propose updates to the product's aspects and aspect values for the catalog by taking the following steps: Use the Taxonomy API's category_tree calls to discover the appropriate category or categories for the seller's inventory item. See Finding categories for a listing or promotion. Use getProductMetadata to determine the aspects of your selected categories and the values of those aspects that should be added to the aspects and values already associated with your product. Use the createChangeRequest call to to submit a change request to update the product in the eBay catalog for your seller's marketplace. Note: The X-EBAY-C-MARKETPLACE-ID request header is required to identify the user's business context. The eBay Product Identifier (ePID) for a catalog product is also required and is specified through the epid query parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Nopolabs\EBay\Commerce\Catalog\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Commerce\Catalog\Api\ProductMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epid = "epid_example"; // string | The unique eBay product identifier of the catalog product that you want to update. The supported and applied aspects, constraints, and values for this eBay catalog product are returned.
$x_ebay_c_marketplace_id = "x_ebay_c_marketplace_id_example"; // string | Use this header to specify the eBay marketplace identifier. Supported values for this header can be found in the MarketplaceIdEnum type definition.
$accept_language = "accept_language_example"; // string | This request header sets the natural language that will be provided in the field values of the response payload. Supported values for this header can be found in the Marketplace ID and language header values table.
$other_applicable_category_ids = "other_applicable_category_ids_example"; // string | Use only if you are also including the primary_category_id parameter in the request. Provide one or more comma-separated category IDs in this parameter. Sellers can use other_applicable_category_ids to retrieve information about the specified categories' associated aspects, constraints, and values, along with the same information for the category specified in the primary_category_id parameter, for the seller to assess, select, and populate for submission with the createChangeRequest call. eBay category IDs are returned by the Taxonomy API's category_tree calls.
$primary_category_id = "primary_category_id_example"; // string | Use only if the seller believes this product is associated with the wrong primary category. Use this parameter to submit the unique identifier of the primary category that the seller wants to use instead. This call retrieves information about the specified category's associated aspects, constraints, and values for the seller to assess, select, and populate for submission with the Catalog API's createChangeRequest call. If you exclude this parameter from your request, this call retrieves information about the aspects, constraints, and values of the specified product's current primary category and other applicable categories. If you include this parameter in your request, this call does not return any information about the specified product's current primary or other applicable categories, but only about the specified category. To retrieve information about any other categories, you must specify them with the other_applicable_category_ids parameter. eBay category IDs are returned by the Taxonomy API's category_tree calls.

try {
    $result = $apiInstance->getProductMetadata($epid, $x_ebay_c_marketplace_id, $accept_language, $other_applicable_category_ids, $primary_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMetadataApi->getProductMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epid** | **string**| The unique eBay product identifier of the catalog product that you want to update. The supported and applied aspects, constraints, and values for this eBay catalog product are returned. |
 **x_ebay_c_marketplace_id** | **string**| Use this header to specify the eBay marketplace identifier. Supported values for this header can be found in the MarketplaceIdEnum type definition. |
 **accept_language** | **string**| This request header sets the natural language that will be provided in the field values of the response payload. Supported values for this header can be found in the Marketplace ID and language header values table. | [optional]
 **other_applicable_category_ids** | **string**| Use only if you are also including the primary_category_id parameter in the request. Provide one or more comma-separated category IDs in this parameter. Sellers can use other_applicable_category_ids to retrieve information about the specified categories&#39; associated aspects, constraints, and values, along with the same information for the category specified in the primary_category_id parameter, for the seller to assess, select, and populate for submission with the createChangeRequest call. eBay category IDs are returned by the Taxonomy API&#39;s category_tree calls. | [optional]
 **primary_category_id** | **string**| Use only if the seller believes this product is associated with the wrong primary category. Use this parameter to submit the unique identifier of the primary category that the seller wants to use instead. This call retrieves information about the specified category&#39;s associated aspects, constraints, and values for the seller to assess, select, and populate for submission with the Catalog API&#39;s createChangeRequest call. If you exclude this parameter from your request, this call retrieves information about the aspects, constraints, and values of the specified product&#39;s current primary category and other applicable categories. If you include this parameter in your request, this call does not return any information about the specified product&#39;s current primary or other applicable categories, but only about the specified category. To retrieve information about any other categories, you must specify them with the other_applicable_category_ids parameter. eBay category IDs are returned by the Taxonomy API&#39;s category_tree calls. | [optional]

### Return type

[**\Nopolabs\EBay\Commerce\Catalog\Model\ProductMetadata**](../Model/ProductMetadata.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductMetadataForCategories**
> \Nopolabs\EBay\Commerce\Catalog\Model\ProductMetadataForCategories getProductMetadataForCategories($primary_category_id, $x_ebay_c_marketplace_id, $accept_language, $other_applicable_category_ids)



This call retrieves an array of all supported aspects, aspect constraints, and aspect values for the specified eBay categories. The array is a union (with duplicates removed) of all returned aspects. After using the search and getProduct calls to find a catalog product that matches a seller's inventory item, you may determine that a matching product does not exist in the eBay catalog. You can propose a new product for the catalog by taking the following steps: Use the Taxonomy API's category_tree calls to discover the appropriate category or categories for the seller's inventory item. See Finding categories for a listing or promotion. Use getProductMetadataForCategories to determine the aspects of your selected categories that should be associated with your new product. Use the createChangeRequest call to to submit a change request to add the new product to the eBay catalog for your seller's marketplace. Note: The X-EBAY-C-MARKETPLACE-ID request header is required to identify the user's business context. At least one eBay category ID is required and is specified through the primary_category_id query parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Nopolabs\EBay\Commerce\Catalog\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Commerce\Catalog\Api\ProductMetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$primary_category_id = "primary_category_id_example"; // string | The unique identifier of the primary eBay category for which you will retrieve product aspects. eBay category IDs are returned by the Taxonomy API's category_tree calls.
$x_ebay_c_marketplace_id = "x_ebay_c_marketplace_id_example"; // string | Use this header to specify the eBay marketplace identifier. Supported values for this header can be found under Supported marketplaces on the Catalog API Overview page.
$accept_language = "accept_language_example"; // string | This request header sets the natural language that will be provided in the field values of the response payload. Supported values for this header can be found in the Marketplace ID and language header values table.
$other_applicable_category_ids = "other_applicable_category_ids_example"; // string | A string of comma-separated category IDs. if sellers want to specify more than the primary category under which to offer a product, they can use this parameter to retrieve the aspects associated with all of the additional specified categories. eBay category IDs are returned by the Taxonomy API's category_tree calls.

try {
    $result = $apiInstance->getProductMetadataForCategories($primary_category_id, $x_ebay_c_marketplace_id, $accept_language, $other_applicable_category_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMetadataApi->getProductMetadataForCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **primary_category_id** | **string**| The unique identifier of the primary eBay category for which you will retrieve product aspects. eBay category IDs are returned by the Taxonomy API&#39;s category_tree calls. |
 **x_ebay_c_marketplace_id** | **string**| Use this header to specify the eBay marketplace identifier. Supported values for this header can be found under Supported marketplaces on the Catalog API Overview page. |
 **accept_language** | **string**| This request header sets the natural language that will be provided in the field values of the response payload. Supported values for this header can be found in the Marketplace ID and language header values table. | [optional]
 **other_applicable_category_ids** | **string**| A string of comma-separated category IDs. if sellers want to specify more than the primary category under which to offer a product, they can use this parameter to retrieve the aspects associated with all of the additional specified categories. eBay category IDs are returned by the Taxonomy API&#39;s category_tree calls. | [optional]

### Return type

[**\Nopolabs\EBay\Commerce\Catalog\Model\ProductMetadataForCategories**](../Model/ProductMetadataForCategories.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

