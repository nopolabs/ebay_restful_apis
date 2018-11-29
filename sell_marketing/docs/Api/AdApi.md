# Nopolabs\EBay\Sell\Marketing\AdApi

All URIs are relative to *https://api.ebay.com/sell/marketing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateAdsByInventoryReference**](AdApi.md#bulkCreateAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/bulk_create_ads_by_inventory_reference | 
[**bulkCreateAdsByListingId**](AdApi.md#bulkCreateAdsByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_create_ads_by_listing_id | 
[**bulkDeleteAdsByInventoryReference**](AdApi.md#bulkDeleteAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/bulk_delete_ads_by_inventory_reference | 
[**bulkDeleteAdsByListingId**](AdApi.md#bulkDeleteAdsByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_delete_ads_by_listing_id | 
[**bulkUpdateAdsBidByInventoryReference**](AdApi.md#bulkUpdateAdsBidByInventoryReference) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_bid_by_inventory_reference | 
[**bulkUpdateAdsBidByListingId**](AdApi.md#bulkUpdateAdsBidByListingId) | **POST** /ad_campaign/{campaign_id}/bulk_update_ads_bid_by_listing_id | 
[**createAdByListingId**](AdApi.md#createAdByListingId) | **POST** /ad_campaign/{campaign_id}/ad | 
[**createAdsByInventoryReference**](AdApi.md#createAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/create_ads_by_inventory_reference | 
[**deleteAd**](AdApi.md#deleteAd) | **DELETE** /ad_campaign/{campaign_id}/ad/{ad_id} | 
[**deleteAdsByInventoryReference**](AdApi.md#deleteAdsByInventoryReference) | **POST** /ad_campaign/{campaign_id}/delete_ads_by_inventory_reference | 
[**getAd**](AdApi.md#getAd) | **GET** /ad_campaign/{campaign_id}/ad/{ad_id} | 
[**getAds**](AdApi.md#getAds) | **GET** /ad_campaign/{campaign_id}/ad | 
[**getAdsByInventoryReference**](AdApi.md#getAdsByInventoryReference) | **GET** /ad_campaign/{campaign_id}/get_ads_by_inventory_reference | 
[**updateBid**](AdApi.md#updateBid) | **POST** /ad_campaign/{campaign_id}/ad/{ad_id}/update_bid | 


# **bulkCreateAdsByInventoryReference**
> \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceResponse bulkCreateAdsByInventoryReference($campaign_id, $body)



This method creates an ad for each inventory reference ID specified in the request and associates the newly created ads with the specified campaign. Use the campaign ID returned from createCampaign as a URI parameter in your call to this method. In the payload, specify the bidPercentage, inventoryReferenceId, and inventoryReferenceType for each listing you want to include in the campaign. Each listing you specify becomes a new ad that is associated with the campaign. An inventory reference ID can be either a seller-defined SKU value or an inventoryItemGroupKey. An inventoryItemGroupKey is seller-defined ID for an inventory item group (a multiple-variation listing), and is created and used by the Inventory API. For information on the eBay marketplaces that support Promoted Listings campaigns, see Promoted Listings requirements and restrictions. Maximums: You can specify a maximum of 500 IDs per call and 25,000 listings per campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceRequest | This type defines the fields for the bulkCreateAdsByInventoryReference request.

try {
    $result = $apiInstance->bulkCreateAdsByInventoryReference($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkCreateAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceRequest**](../Model/BulkCreateAdsByInventoryReferenceRequest.md)| This type defines the fields for the bulkCreateAdsByInventoryReference request. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceResponse**](../Model/BulkCreateAdsByInventoryReferenceResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkCreateAdsByListingId**
> \Nopolabs\EBay\Sell\Marketing\Model\BulkAdResponse bulkCreateAdsByListingId($campaign_id, $body)



This method creates an ad for each listing ID specified in the request and associates the newly created ads with the specified campaign. Use the campaign ID returned from createCampaign as a URI parameter and specify a list of elements, each containing a listingId and its associated bidPercentage, for each listing you want associated with the ad campaign. Each listing you specify becomes a new ad that is associated with the campaign. A listing ID can be either a listing ID created by the Inventory API or an item ID that is used by the Trading API. For information on the eBay marketplaces that support Promoted Listings campaigns, see Promoted Listings requirements and restrictions. Maximums: You can specify a maximum of 500 IDs per call and 25,000 listings per campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdRequest | The container for the bulk request to create ads for eBay listing IDs. eBay listing IDs are generated when the listing is created on eBay. Note: This request accepts both listing IDs, as generated by the Inventory API, and an item IDs, as used in the eBay Traditional API set (e.g., the Trading and Finding APIs).

try {
    $result = $apiInstance->bulkCreateAdsByListingId($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkCreateAdsByListingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdRequest**](../Model/BulkCreateAdRequest.md)| The container for the bulk request to create ads for eBay listing IDs. eBay listing IDs are generated when the listing is created on eBay. Note: This request accepts both listing IDs, as generated by the Inventory API, and an item IDs, as used in the eBay Traditional API set (e.g., the Trading and Finding APIs). |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\BulkAdResponse**](../Model/BulkAdResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkDeleteAdsByInventoryReference**
> \Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdsByInventoryReferenceResponse bulkDeleteAdsByInventoryReference($campaign_id, $body)



This method deletes a set of ads, as specified by a list of inventory reference IDs, from the specified campaign. Pass the campaign_id as a URI parameter and create a request payload that contains a list of inventoryReferenceId and inventoryReferenceType pairs. An inventory reference ID is either a seller-defined SKU value or an inventoryItemGroupKey (a seller-defined ID for an inventory item group, which is an entity that's used in the Inventory API to create a multiple-variation listing). Get the campaign IDs for a seller by calling getCampaigns and call getAds to get a list of the seller's inventory reference IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdsByInventoryReferenceRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdsByInventoryReferenceRequest | This type defines the fields for a bulkDeleteAdsByInventoryReference request.

try {
    $result = $apiInstance->bulkDeleteAdsByInventoryReference($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkDeleteAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdsByInventoryReferenceRequest**](../Model/BulkDeleteAdsByInventoryReferenceRequest.md)| This type defines the fields for a bulkDeleteAdsByInventoryReference request. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdsByInventoryReferenceResponse**](../Model/BulkDeleteAdsByInventoryReferenceResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkDeleteAdsByListingId**
> \Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdResponse bulkDeleteAdsByListingId($campaign_id, $body)



This method deletes a set of ads, as specified by a list of listing IDs, from the specified campaign. Supply the campaign_id as a URI parameter and create a request payload that contains a list of listingId values. An eBay listing ID is generated when a listing is created on eBay. Get the campaign IDs for a seller by calling getCampaigns and call getAds to get a list of the seller's listing IDs. Note: This request accepts both listing IDs, as generated by the Inventory API, and an item IDs, as used in the eBay Traditional API set (e.g., the Trading and Finding APIs).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdRequest | This type defines the fields for the bulkDeleteAdsByListingId request.

try {
    $result = $apiInstance->bulkDeleteAdsByListingId($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkDeleteAdsByListingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdRequest**](../Model/BulkDeleteAdRequest.md)| This type defines the fields for the bulkDeleteAdsByListingId request. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\BulkDeleteAdResponse**](../Model/BulkDeleteAdResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkUpdateAdsBidByInventoryReference**
> \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceResponse bulkUpdateAdsBidByInventoryReference($campaign_id, $body)



This method replaces an ad bid based on a list of inventory references IDs associated with the specified campaign. In the request, specify the campaign_id as a URI parameter and a list of the bidPercentage, inventoryReferenceId, inventoryReferenceType fields. An inventory reference ID is either a seller-defined SKU value or an inventoryItemGroupKey (a seller-defined ID for an inventory item group, which is an entity that's used in the Inventory API to create a multiple-variation listing). You must always specify both an inventory_reference_id and the associated inventory_reference_type. Get the campaign IDs for a seller by calling getCampaigns and call getAds to get a list of the seller's inventory reference IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceRequest | This type defines the fields for the BulkCreateAdsByInventoryReference request.

try {
    $result = $apiInstance->bulkUpdateAdsBidByInventoryReference($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsBidByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceRequest**](../Model/BulkCreateAdsByInventoryReferenceRequest.md)| This type defines the fields for the BulkCreateAdsByInventoryReference request. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdsByInventoryReferenceResponse**](../Model/BulkCreateAdsByInventoryReferenceResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkUpdateAdsBidByListingId**
> \Nopolabs\EBay\Sell\Marketing\Model\BulkAdResponse bulkUpdateAdsBidByListingId($campaign_id, $body)



This method replaces an ad bid based on a supplied list of listing IDs that are associated with the specified campaign. In the request, specify the campaign_id as a URI parameter and create a request payload that contains a list of listingId values. An eBay listing ID is generated when a listing is created on eBay. Get the campaign IDs for a seller by calling getCampaigns and call getAds to get a list of the seller's listing IDs. Note: This request accepts both listing IDs, as generated by the Inventory API, and an item IDs, as used in the eBay Traditional API set (e.g., the Trading and Finding APIs).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdRequest | Container for the bulk request to update ads.

try {
    $result = $apiInstance->bulkUpdateAdsBidByListingId($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->bulkUpdateAdsBidByListingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\BulkCreateAdRequest**](../Model/BulkCreateAdRequest.md)| Container for the bulk request to update ads. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\BulkAdResponse**](../Model/BulkAdResponse.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAdByListingId**
> object createAdByListingId($campaign_id, $body)



This method creates an ad for the specified listing ID, sets the bid percentage for that specific item, and associates the ad with the specified campaign. Use the campaign ID returned from createCampaign as a URI parameter and specify a listingId and its associated bidPercentage in the payload. After processing the request, eBay returns the ID of the newly-created ad in the Location response header. Call getCampaigns to get a list of the seller's campaign IDs. Note: This request accepts both listing IDs, as generated by the Inventory API, and an item IDs, as used in the eBay Traditional API set (e.g., the Trading and Finding APIs). For information on the eBay marketplaces that support Promoted Listings campaigns, see Promoted Listings requirements and restrictions. Maximums: You can specify a maximum of 500 IDs per call and 25,000 listings per campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\CreateAdRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\CreateAdRequest | This type defines the fields for the createAd request.

try {
    $result = $apiInstance->createAdByListingId($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->createAdByListingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\CreateAdRequest**](../Model/CreateAdRequest.md)| This type defines the fields for the createAd request. |

### Return type

**object**

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAdsByInventoryReference**
> \Nopolabs\EBay\Sell\Marketing\Model\AdReferences createAdsByInventoryReference($campaign_id, $body)



This method creates an ad for the specified inventory reference ID, sets the bid percentage for that specific item, and associates the ad with the specified campaign. Use the campaign ID returned from createCampaign as a URI parameter and in the payload specify an inventoryReferenceId, its inventoryReferenceType, and the bidPercentage for the specific item. After processing the request, eBay returns the ID of the newly-created ad in the Location response header. Note: If the inventory reference ID points to an item group listing (a multi-variation listing), eBay creates an ad for each variation. For example, if the specified inventory reference ID points to a shirt that comes in 3 sizes and 3 colors, 9 ads are created by this call. Keep this in mind so that you stay within the limit of 25,000 listings per campaign ID. Call getCampaigns to get a list of the seller's campaign IDs. For information on the eBay marketplaces that support Promoted Listings campaigns, see Promoted Listings requirements and restrictions. Maximums: You can specify a maximum of 500 IDs per call and 25,000 listings per campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\CreateAdsByInventoryReferenceRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\CreateAdsByInventoryReferenceRequest | This type defines the fields for the createAdsByInventoryReference request.

try {
    $result = $apiInstance->createAdsByInventoryReference($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->createAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\CreateAdsByInventoryReferenceRequest**](../Model/CreateAdsByInventoryReferenceRequest.md)| This type defines the fields for the createAdsByInventoryReference request. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\AdReferences**](../Model/AdReferences.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAd**
> deleteAd($ad_id, $campaign_id)



This method removes the specified ad from the specified campaign. This method requires that you pass in the ID of the ad to delete and the ID of the campaign to which the ad is associated. Call getCampaigns to get the current list of the seller's campaign IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = "ad_id_example"; // string | Identifier of an ad. This ID was generated when the ad was created.
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.

try {
    $apiInstance->deleteAd($ad_id, $campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->deleteAd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_id** | **string**| Identifier of an ad. This ID was generated when the ad was created. |
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAdsByInventoryReference**
> \Nopolabs\EBay\Sell\Marketing\Model\AdIds deleteAdsByInventoryReference($campaign_id, $body)



This method deletes ads using a list of seller inventory reference IDs that are associated with the specified campaign ID. Specify the campaign ID and a list of inventoryReferenceId and inventoryReferenceType pairs to be deleted. Call getCampaigns to get a list of the seller's current campaign IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\DeleteAdsByInventoryReferenceRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\DeleteAdsByInventoryReferenceRequest | This type defines the fields for the deleteAdsByInventoryReference request.

try {
    $result = $apiInstance->deleteAdsByInventoryReference($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->deleteAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\DeleteAdsByInventoryReferenceRequest**](../Model/DeleteAdsByInventoryReferenceRequest.md)| This type defines the fields for the deleteAdsByInventoryReference request. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\AdIds**](../Model/AdIds.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAd**
> \Nopolabs\EBay\Sell\Marketing\Model\Ad getAd($ad_id, $campaign_id)



This method retrieves the specified ad from the specified campaign. In the request, supply the campaign_id and ad_id as URI parameters. Call getCampaigns to retrieve a list of the seller's current campaign IDs and call getAds to retrieve their current ad IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = "ad_id_example"; // string | Identifier of an ad. This ID was generated when the ad was created.
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.

try {
    $result = $apiInstance->getAd($ad_id, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_id** | **string**| Identifier of an ad. This ID was generated when the ad was created. |
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\Ad**](../Model/Ad.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAds**
> \Nopolabs\EBay\Sell\Marketing\Model\AdPagedCollection getAds($campaign_id, $listing_ids, $limit, $offset)



This method retrieves all the ads for the specified campaign. Use the listing_ids query parameter to control the ads to target, and paginate the result set by specifying a limit, which dictates how many ads to return on each page of the response. Specify how many ads to skip in the result set before returning the first result using the offset parameter. Call getCampaigns to retrieve the current campaign IDs for the seller. Note: This field accepts both a listingId, as generated by the Inventory API, and an itemId as used in the eBay Traditional API set (e.g., the Trading and Finding APIs).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$listing_ids = "listing_ids_example"; // string | A comma separated list of eBay listing IDs. The response includes only active ads (ads associated with a RUNNING campaign). The results do not include listing IDs that are excluded by other conditions. Note: This field accepts both listing IDs, as generated by the Inventory API, and an item IDs, as used in the eBay Traditional API set (e.g., the Trading and Finding APIs).
$limit = "limit_example"; // string | Specifies the maximum number of ads to return on a page in the paginated response. Default: 10 Maximum: 500
$offset = "offset_example"; // string | Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the ads returned in the response. For example, if you supply an offset of 0 and a limit of 10, the response contains the first 10 ads from the complete list of ads retrieved by the call. If offset is 10 and limit is 10, the first page of the response contains ads 11-20 from the complete result set. Default: 0

try {
    $result = $apiInstance->getAds($campaign_id, $listing_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **listing_ids** | **string**| A comma separated list of eBay listing IDs. The response includes only active ads (ads associated with a RUNNING campaign). The results do not include listing IDs that are excluded by other conditions. Note: This field accepts both listing IDs, as generated by the Inventory API, and an item IDs, as used in the eBay Traditional API set (e.g., the Trading and Finding APIs). |
 **limit** | **string**| Specifies the maximum number of ads to return on a page in the paginated response. Default: 10 Maximum: 500 | [optional]
 **offset** | **string**| Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. Combine offset with the limit query parameter to control the ads returned in the response. For example, if you supply an offset of 0 and a limit of 10, the response contains the first 10 ads from the complete list of ads retrieved by the call. If offset is 10 and limit is 10, the first page of the response contains ads 11-20 from the complete result set. Default: 0 | [optional]

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\AdPagedCollection**](../Model/AdPagedCollection.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdsByInventoryReference**
> \Nopolabs\EBay\Sell\Marketing\Model\Ads getAdsByInventoryReference($campaign_id, $inventory_reference_id, $inventory_reference_type)



This method retrieves ads from the specified campaign using the seller's inventory reference ID and inventory reference type. Supply the campaign_id as a URI parameter and configure the payload with inventory_reference_id inventory_reference_type pairs. An inventory reference ID is either a seller-defined SKU value or an inventoryItemGroupKey (a seller-defined ID for an inventory item group, which is an entity that's used in the Inventory API to create a multiple-variation listing). You must always specify both an inventory_reference_id and the associated inventory_reference_type. Call getCampaigns to retrieve all of the seller's the current campaign IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$inventory_reference_id = "inventory_reference_id_example"; // string | The inventory reference ID associated with the ad you want returned. A seller's inventory reference ID is the ID of either a listing or the ID of an inventory item group (the parent of a multi-variation listing, such as a shirt that is available in multiple sizes and colors). You must always supply in both an inventory_reference_id and an inventory_reference_type.
$inventory_reference_type = "inventory_reference_type_example"; // string | The type of the inventory reference ID. Set this value to either INVENTORY_ITEM (a single listing) or INVENTORY_ITEM_GROUP (a multi-variation listing). You must always pass in both an inventory_reference_id and an inventory_reference_type.

try {
    $result = $apiInstance->getAdsByInventoryReference($campaign_id, $inventory_reference_id, $inventory_reference_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->getAdsByInventoryReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **inventory_reference_id** | **string**| The inventory reference ID associated with the ad you want returned. A seller&#39;s inventory reference ID is the ID of either a listing or the ID of an inventory item group (the parent of a multi-variation listing, such as a shirt that is available in multiple sizes and colors). You must always supply in both an inventory_reference_id and an inventory_reference_type. |
 **inventory_reference_type** | **string**| The type of the inventory reference ID. Set this value to either INVENTORY_ITEM (a single listing) or INVENTORY_ITEM_GROUP (a multi-variation listing). You must always pass in both an inventory_reference_id and an inventory_reference_type. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\Ads**](../Model/Ads.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBid**
> updateBid($ad_id, $campaign_id, $body)



This method updates the bid for the specified ad in the specified campaign. In the request, supply the campaign_id and ad_id as a URI parameters. Call getCampaigns to retrive a seller's current campaign IDs and call getAds to get their ad IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\AdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_id = "ad_id_example"; // string | A unique eBay-assigned ID for an ad that's generated when an ad is created.
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\UpdateBidPercentageRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\UpdateBidPercentageRequest | This type defines the fields for the updateBid request.

try {
    $apiInstance->updateBid($ad_id, $campaign_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->updateBid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_id** | **string**| A unique eBay-assigned ID for an ad that&#39;s generated when an ad is created. |
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\UpdateBidPercentageRequest**](../Model/UpdateBidPercentageRequest.md)| This type defines the fields for the updateBid request. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

