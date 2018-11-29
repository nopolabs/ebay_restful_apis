# Nopolabs\EBay\Commerce\Taxonomy\CategoryTreeApi

All URIs are relative to *https://api.ebay.com/commerce/taxonomy/v1_beta*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategorySubtree**](CategoryTreeApi.md#getCategorySubtree) | **GET** /category_tree/{category_tree_id}/get_category_subtree | Get a Category Subtree
[**getCategorySuggestions**](CategoryTreeApi.md#getCategorySuggestions) | **GET** /category_tree/{category_tree_id}/get_category_suggestions | Get Suggested Categories
[**getCategoryTree**](CategoryTreeApi.md#getCategoryTree) | **GET** /category_tree/{category_tree_id} | Get a Category Tree
[**getDefaultCategoryTreeId**](CategoryTreeApi.md#getDefaultCategoryTreeId) | **GET** /get_default_category_tree_id | Get a Default Category Tree ID
[**getItemAspectsForCategory**](CategoryTreeApi.md#getItemAspectsForCategory) | **GET** /category_tree/{category_tree_id}/get_item_aspects_for_category | 


# **getCategorySubtree**
> \Nopolabs\EBay\Commerce\Taxonomy\Model\CategorySubtree getCategorySubtree($category_id, $category_tree_id)

Get a Category Subtree

This call retrieves the details of all nodes of the category tree hierarchy (the subtree) below a specified category of a category tree. You identify the tree using the category_tree_id parameter, which was returned by the getDefaultCategoryTreeId call in the categoryTreeId field. Note: This call can return a very large payload, so you are strongly advised to submit the request with the following HTTP header: &nbsp;&nbsp;Accept-Encoding: application/gzip With this header (in addition to the required headers described under HTTP Request Headers), the call returns the response with gzip compression.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Nopolabs\EBay\Commerce\Taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Commerce\Taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = "category_id_example"; // string | The unique identifier of the category at the top of the subtree being requested. Note: If the category_id submitted identifies the root node of the tree, this call returns an error. To retrieve the complete tree, use this value with the getCategoryTree call. If the category_id submitted identifies a leaf node of the tree, the call response will contain information about only that leaf node, which is a valid subtree.
$category_tree_id = "category_tree_id_example"; // string | The unique identifier of the eBay category tree from which a category subtree is being requested.

try {
    $result = $apiInstance->getCategorySubtree($category_id, $category_tree_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCategorySubtree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The unique identifier of the category at the top of the subtree being requested. Note: If the category_id submitted identifies the root node of the tree, this call returns an error. To retrieve the complete tree, use this value with the getCategoryTree call. If the category_id submitted identifies a leaf node of the tree, the call response will contain information about only that leaf node, which is a valid subtree. |
 **category_tree_id** | **string**| The unique identifier of the eBay category tree from which a category subtree is being requested. |

### Return type

[**\Nopolabs\EBay\Commerce\Taxonomy\Model\CategorySubtree**](../Model/CategorySubtree.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategorySuggestions**
> \Nopolabs\EBay\Commerce\Taxonomy\Model\CategorySuggestionResponse getCategorySuggestions($category_tree_id, $q)

Get Suggested Categories

This call returns an array of category tree leaf nodes in the specified category tree that are considered by eBay to most closely correspond to the query string q. Returned with each suggested node is a localized name for that category (based on the Accept-Language header specified for the call), and details about each of the category's ancestor nodes, extending from its immediate parent up to the root of the category tree. Note: This call can return a large payload, so you are advised to submit the request with the following HTTP header: &nbsp;&nbsp;Accept-Encoding: application/gzip With this header (in addition to the required headers described under HTTP Request Headers), the call returns the response with gzip compression. You identify the tree using the category_tree_id parameter, which was returned by the getDefaultCategoryTreeId call in the categoryTreeId field. Important: This call is not supported in the Sandbox environment. It will return a response payload in which the categoryName fields contain random or boilerplate text regardless of the query submitted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Nopolabs\EBay\Commerce\Taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Commerce\Taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_tree_id = "category_tree_id_example"; // string | The unique identifier of the eBay category tree for which suggested nodes are being requested.
$q = "q_example"; // string | A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combination of phrases or keywords. eBay will parse the string and return suggested categories for the item.

try {
    $result = $apiInstance->getCategorySuggestions($category_tree_id, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCategorySuggestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_tree_id** | **string**| The unique identifier of the eBay category tree for which suggested nodes are being requested. |
 **q** | **string**| A quoted string that describes or characterizes the item being offered for sale. The string format is free form, and can contain any combination of phrases or keywords. eBay will parse the string and return suggested categories for the item. |

### Return type

[**\Nopolabs\EBay\Commerce\Taxonomy\Model\CategorySuggestionResponse**](../Model/CategorySuggestionResponse.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoryTree**
> \Nopolabs\EBay\Commerce\Taxonomy\Model\CategoryTree getCategoryTree($category_tree_id)

Get a Category Tree

This call retrieves the complete category tree that is identified by the category_tree_id parameter. The value of category_tree_id was returned by the getDefaultCategoryTreeId call in the categoryTreeId field. The response contains details of all nodes of the specified eBay category tree, as well as the eBay marketplaces that use this category tree. Note: This call can return a very large payload, so you are strongly advised to submit the request with the following HTTP header: &nbsp;&nbsp;Accept-Encoding: application/gzip With this header (in addition to the required headers described under HTTP Request Headers), the call returns the response with gzip compression.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Nopolabs\EBay\Commerce\Taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Commerce\Taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_tree_id = "category_tree_id_example"; // string | The unique identifier of the eBay category tree being requested.

try {
    $result = $apiInstance->getCategoryTree($category_tree_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getCategoryTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_tree_id** | **string**| The unique identifier of the eBay category tree being requested. |

### Return type

[**\Nopolabs\EBay\Commerce\Taxonomy\Model\CategoryTree**](../Model/CategoryTree.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDefaultCategoryTreeId**
> \Nopolabs\EBay\Commerce\Taxonomy\Model\BaseCategoryTree getDefaultCategoryTreeId($marketplace_id)

Get a Default Category Tree ID

A given eBay marketplace might use multiple category trees, but one of those trees is considered to be the default for that marketplace. This call retrieves a reference to the default category tree associated with the specified eBay marketplace ID. The response includes only the tree's unique identifier and version, which you can use to retrieve more details about the tree, its structure, and its individual category nodes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Nopolabs\EBay\Commerce\Taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Commerce\Taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | The ID of the eBay marketplace for which the category tree ID is being requested. For a list of supported marketplace IDs, see Marketplaces with Default Category Trees.

try {
    $result = $apiInstance->getDefaultCategoryTreeId($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getDefaultCategoryTreeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The ID of the eBay marketplace for which the category tree ID is being requested. For a list of supported marketplace IDs, see Marketplaces with Default Category Trees. |

### Return type

[**\Nopolabs\EBay\Commerce\Taxonomy\Model\BaseCategoryTree**](../Model/BaseCategoryTree.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemAspectsForCategory**
> \Nopolabs\EBay\Commerce\Taxonomy\Model\AspectMetadata getItemAspectsForCategory($category_id, $category_tree_id)



This call returns a list of aspects that are appropriate or necessary for accurately describing items in the specified leaf category. Each aspect identifies an item attribute (for example, color) for which the seller will be required or encouraged to provide a value (or variation values) when offering an item in that category on eBay. For each aspect, getItemAspectsForCategory provides complete metadata, including: The aspect's data type, format, and entry mode Whether the aspect is required in listings Whether the aspect can be used for item variations Whether the aspect accepts multiple values for an item Allowed values for the aspect Use this information to construct an interface through which sellers can enter or select the appropriate values for their items or item variations. Once you collect those values, include them as product aspects when creating inventory items using the Inventory API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Nopolabs\EBay\Commerce\Taxonomy\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Commerce\Taxonomy\Api\CategoryTreeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = "category_id_example"; // string | The unique identifier of the leaf category for which aspects are being requested. Note: If the category_id submitted does not identify a leaf node of the tree, this call returns an error.
$category_tree_id = "category_tree_id_example"; // string | The unique identifier of the eBay category tree from which the specified category's aspects are being requested.

try {
    $result = $apiInstance->getItemAspectsForCategory($category_id, $category_tree_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryTreeApi->getItemAspectsForCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The unique identifier of the leaf category for which aspects are being requested. Note: If the category_id submitted does not identify a leaf node of the tree, this call returns an error. |
 **category_tree_id** | **string**| The unique identifier of the eBay category tree from which the specified category&#39;s aspects are being requested. |

### Return type

[**\Nopolabs\EBay\Commerce\Taxonomy\Model\AspectMetadata**](../Model/AspectMetadata.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

