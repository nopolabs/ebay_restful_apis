# Nopolabs\EBay\Sell\Marketing\CampaignApi

All URIs are relative to *https://api.ebay.com/sell/marketing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneCampaign**](CampaignApi.md#cloneCampaign) | **POST** /ad_campaign/{campaign_id}/clone | 
[**createCampaign**](CampaignApi.md#createCampaign) | **POST** /ad_campaign | 
[**deleteCampaign**](CampaignApi.md#deleteCampaign) | **DELETE** /ad_campaign/{campaign_id} | 
[**endCampaign**](CampaignApi.md#endCampaign) | **POST** /ad_campaign/{campaign_id}/end | 
[**findCampaignByAdReference**](CampaignApi.md#findCampaignByAdReference) | **GET** /ad_campaign/find_campaign_by_ad_reference | 
[**getCampaign**](CampaignApi.md#getCampaign) | **GET** /ad_campaign/{campaign_id} | 
[**getCampaignByName**](CampaignApi.md#getCampaignByName) | **GET** /ad_campaign/get_campaign_by_name | 
[**getCampaigns**](CampaignApi.md#getCampaigns) | **GET** /ad_campaign | 
[**pauseCampaign**](CampaignApi.md#pauseCampaign) | **POST** /ad_campaign/{campaign_id}/pause | 
[**resumeCampaign**](CampaignApi.md#resumeCampaign) | **POST** /ad_campaign/{campaign_id}/resume | 
[**updateCampaignIdentification**](CampaignApi.md#updateCampaignIdentification) | **POST** /ad_campaign/{campaign_id}/update_campaign_identification | 


# **cloneCampaign**
> object cloneCampaign($campaign_id, $body)



This method clones (makes a copy of) the specified campaign. Supply the campaign_id as a URI parameter. The ID of the newly-cloned campaign is returned in the Location response header. Call getCampaigns to retrieve a seller's current campaign IDs Requirement: In order to clone a campaign, the campaignStatus must be ENDED and the campaign must define a set of selection rules (it must be a rules-based campaign).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\CloneCampaignRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\CloneCampaignRequest | This type defines the fields for a clone campaign request.

try {
    $result = $apiInstance->cloneCampaign($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->cloneCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\CloneCampaignRequest**](../Model/CloneCampaignRequest.md)| This type defines the fields for a clone campaign request. |

### Return type

**object**

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCampaign**
> object createCampaign($body)



This method creates a Promoted Listings ad campaign. To create a basic campaign, supply the user-defined campaign name, the start date (and optionally the end date) of the campaign, the eBay marketplace on which the campaign is hosted, and details on the campaign funding model. The campaign funding model specifies how the Promoted Listings fee is calculated. Currently, the only supported funding model is COST_PER_SALE. For complete information on how the fee is calculated and when it applies, see Promoted Listings fees. For details on creating Promoted Listings campaigns and how to select the items to be included in your campaigns, see Creating Promoted Listings campaigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Nopolabs\EBay\Sell\Marketing\Model\CreateCampaignRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\CreateCampaignRequest | This type defines the fields for the create campaign request.

try {
    $result = $apiInstance->createCampaign($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\CreateCampaignRequest**](../Model/CreateCampaignRequest.md)| This type defines the fields for the create campaign request. |

### Return type

**object**

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCampaign**
> deleteCampaign($campaign_id)



This method deletes the campaign specified by the campaign_id query parameter. Note: You can delete only campaigns that have ended. Call getCampaigns to retrieve the campaign_id and the campaign status (RUNNING, PAUSED, ENDED, and so on) for all the seller's campaigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.

try {
    $apiInstance->deleteCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endCampaign**
> endCampaign($campaign_id)



This method ends an active (RUNNINGM) or paused campaign. Specify the campaign you want to end by supplying its campaign ID in a query parameter. Call getCampaigns to retrieve the campaign_id and the campaign status (RUNNING, PAUSED, ENDED, and so on) for all the seller's campaigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.

try {
    $apiInstance->endCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->endCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findCampaignByAdReference**
> \Nopolabs\EBay\Sell\Marketing\Model\Campaigns findCampaignByAdReference($inventory_reference_id, $inventory_reference_type, $listing_id)



This method retrieves the campaign containing the listing that is specified using either an eBay listing ID or an inventory reference ID and inventory reference type. eBay listing IDs are generated when you create a listing. An inventory reference ID can be either a seller-defined SKU value or an inventoryItemGroupKey (a seller-defined ID for an inventory item group, which is an entity that's used by the Inventory API to create a multiple-variation listing such as a shirt that is available in multiple sizes and colors. Note: This request accepts both listing IDs, as generated by the Inventory API, and an item IDs, as used in the eBay Traditional API set (e.g., the Trading and Finding APIs).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_reference_id = "inventory_reference_id_example"; // string | The seller's inventory reference ID of the listing to be used to find the campaign in which it is associated. You must always pass in both inventory_reference_id and inventory_reference_type.
$inventory_reference_type = "inventory_reference_type_example"; // string | The type of the seller's inventory reference ID, which is a listing or group of items. You must always pass in both inventory_reference_id and inventory_reference_type.
$listing_id = "listing_id_example"; // string | Identifier of the eBay listing associated with the ad.

try {
    $result = $apiInstance->findCampaignByAdReference($inventory_reference_id, $inventory_reference_type, $listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->findCampaignByAdReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_reference_id** | **string**| The seller&#39;s inventory reference ID of the listing to be used to find the campaign in which it is associated. You must always pass in both inventory_reference_id and inventory_reference_type. | [optional]
 **inventory_reference_type** | **string**| The type of the seller&#39;s inventory reference ID, which is a listing or group of items. You must always pass in both inventory_reference_id and inventory_reference_type. | [optional]
 **listing_id** | **string**| Identifier of the eBay listing associated with the ad. | [optional]

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\Campaigns**](../Model/Campaigns.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaign**
> \Nopolabs\EBay\Sell\Marketing\Model\Campaign getCampaign($campaign_id)



This method retrieves the details of a single campaign, as specified with the campaign_id query parameter. This method returns all the details of a campaign (including the campaign's the selection rules), except the for the listing IDs or inventory reference IDs included in the campaign. These IDs are returned by getAds. Call getCampaigns to retrieve a list of the seller's campaign IDs. Note: This call does not retrieve campaigns created via the eBay web flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.

try {
    $result = $apiInstance->getCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\Campaign**](../Model/Campaign.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignByName**
> \Nopolabs\EBay\Sell\Marketing\Model\Campaign getCampaignByName($campaign_name)



This method retrieves the details of a single campaign, as specified with the campaign_name query parameter. Note that the campaign name you specify must be an exact, case-sensitive match of the name of the campaign you want to retrieve. This method returns all the details of a campaign (including the campaign's the selection rules), except the for the listing IDs or inventory reference IDs included in the campaign. These IDs are returned by getAds. Call getCampaigns to retrieve a list of the seller's campaign names. Note: This call does not retrieve campaigns created via the eBay web flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_name = "campaign_name_example"; // string | Name of the campaign.

try {
    $result = $apiInstance->getCampaignByName($campaign_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_name** | **string**| Name of the campaign. |

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\Campaign**](../Model/Campaign.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaigns**
> \Nopolabs\EBay\Sell\Marketing\Model\CampaignPagedCollection getCampaigns($campaign_name, $campaign_status, $end_date_range, $limit, $offset, $start_date_range)



This method retrieves the details for all the campaigns of a seller, including the campaign's the selection rules. Note that this method does not return the listing IDs or inventory reference IDs of the items included in the ad campaign. Call getAds to retrieve these IDs. You can filter the result set by a campaign name, end date range, start date range, or campaign status. You can also paginate the records returned from the result set using the limit query parameter, and control which records to return using the offset parameter. Note: This call does not retrieve campaigns created via the eBay web flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_name = "campaign_name_example"; // string | Specifies the campaign name. The results are filtered to include only the campaign by the specified name. Note: The results might be null if other filters exclude the campaign with this name. Maximum: 1 campaign name
$campaign_status = "campaign_status_example"; // string | Specifies the campaign status. The results are filtered to include only campaigns that are in the specified states. Note: The results might not include all the campaigns with this status if other filters exclude them. Valid values: See CampaignStatusEnum Maximum: 1 status
$end_date_range = "end_date_range_example"; // string | Specifies the range of a campaign's end date. The results are filtered to include only campaigns with an end date that is within specified range. Valid format (UTC): &nbsp;&nbsp;&nbsp;&nbsp;yyyy-MM-ddThh:mm.ss.sssZ..yyyy-MM-ddThh:mm.ss.sssZ&nbsp;&nbsp; (campaign ends within this range) &nbsp;&nbsp;&nbsp;&nbsp;yyyy-MM-ddThh:mm.ss.sssZ..&nbsp;&nbsp;(campaign ends on or after this date) &nbsp;&nbsp;&nbsp;&nbsp;..yyyy-MM-ddThh:mm.ss.sssZ&nbsp;&nbsp; (campaign ends on or before this date) &nbsp;&nbsp;&nbsp;&nbsp;2016-09-08T00:00.00.000Z..2016-09-09Thh:00.00.000Z&nbsp;&nbsp; (campaign ends on September 8, 2016) Note: The results might not include all the campaigns ending on this date if other filters exclude them.
$limit = "limit_example"; // string | Specifies the maximum number of campaigns to return on a page in the paginated response. Default: 10 Maximum: 500
$offset = "offset_example"; // string | Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response. Combine offset with the limit query parameter to control the campaigns returned in the response. For example, if you supply an offset of 0 and a limit of 10, the response contains the first 10 campaigns from the complete list of campaigns retrieved by the call. If offset is 10 and limit is 10, the first page of the response contains campaigns 11-20 from the complete result set. Default: 0
$start_date_range = "start_date_range_example"; // string | Specifies the range of a campaign's start date in which to filter the results. The results are filtered to include only campaigns with a start date that is equal to this date or is within specified range. Valid format (UTC): &nbsp;&nbsp;&nbsp;&nbsp;yyyy-MM-ddThh:mm.ss.sssZ..yyyy-MM-ddThh:mm.ss.sssZ&nbsp;&nbsp; (starts within this range) &nbsp;&nbsp;&nbsp;&nbsp;yyyy-MM-ddThh:mm.ss.sssZ..&nbsp;&nbsp;(campaign starts on or after this date) &nbsp;&nbsp;&nbsp;&nbsp;..yyyy-MM-ddThh:mm.ss.sssZ&nbsp;&nbsp; (campaign starts on or before this date) &nbsp;&nbsp;&nbsp;&nbsp;2016-09-08T00:00.00.000Z..2016-09-09Thh:00.00.000Z&nbsp;&nbsp; (campaign starts on September 8, 2016) Note: The results might not include all the campaigns with this start date if other filters exclude them.

try {
    $result = $apiInstance->getCampaigns($campaign_name, $campaign_status, $end_date_range, $limit, $offset, $start_date_range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_name** | **string**| Specifies the campaign name. The results are filtered to include only the campaign by the specified name. Note: The results might be null if other filters exclude the campaign with this name. Maximum: 1 campaign name | [optional]
 **campaign_status** | **string**| Specifies the campaign status. The results are filtered to include only campaigns that are in the specified states. Note: The results might not include all the campaigns with this status if other filters exclude them. Valid values: See CampaignStatusEnum Maximum: 1 status | [optional]
 **end_date_range** | **string**| Specifies the range of a campaign&#39;s end date. The results are filtered to include only campaigns with an end date that is within specified range. Valid format (UTC): &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;yyyy-MM-ddThh:mm.ss.sssZ..yyyy-MM-ddThh:mm.ss.sssZ&amp;nbsp;&amp;nbsp; (campaign ends within this range) &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;yyyy-MM-ddThh:mm.ss.sssZ..&amp;nbsp;&amp;nbsp;(campaign ends on or after this date) &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;..yyyy-MM-ddThh:mm.ss.sssZ&amp;nbsp;&amp;nbsp; (campaign ends on or before this date) &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2016-09-08T00:00.00.000Z..2016-09-09Thh:00.00.000Z&amp;nbsp;&amp;nbsp; (campaign ends on September 8, 2016) Note: The results might not include all the campaigns ending on this date if other filters exclude them. | [optional]
 **limit** | **string**| Specifies the maximum number of campaigns to return on a page in the paginated response. Default: 10 Maximum: 500 | [optional]
 **offset** | **string**| Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response. Combine offset with the limit query parameter to control the campaigns returned in the response. For example, if you supply an offset of 0 and a limit of 10, the response contains the first 10 campaigns from the complete list of campaigns retrieved by the call. If offset is 10 and limit is 10, the first page of the response contains campaigns 11-20 from the complete result set. Default: 0 | [optional]
 **start_date_range** | **string**| Specifies the range of a campaign&#39;s start date in which to filter the results. The results are filtered to include only campaigns with a start date that is equal to this date or is within specified range. Valid format (UTC): &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;yyyy-MM-ddThh:mm.ss.sssZ..yyyy-MM-ddThh:mm.ss.sssZ&amp;nbsp;&amp;nbsp; (starts within this range) &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;yyyy-MM-ddThh:mm.ss.sssZ..&amp;nbsp;&amp;nbsp;(campaign starts on or after this date) &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;..yyyy-MM-ddThh:mm.ss.sssZ&amp;nbsp;&amp;nbsp; (campaign starts on or before this date) &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;2016-09-08T00:00.00.000Z..2016-09-09Thh:00.00.000Z&amp;nbsp;&amp;nbsp; (campaign starts on September 8, 2016) Note: The results might not include all the campaigns with this start date if other filters exclude them. | [optional]

### Return type

[**\Nopolabs\EBay\Sell\Marketing\Model\CampaignPagedCollection**](../Model/CampaignPagedCollection.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pauseCampaign**
> pauseCampaign($campaign_id)



This method pauses an active (RUNNING) campaign. You can restarted by calling resumeCampaign, as long as the campaign's end date is in the future. Note: The listings associated with a paused campaign cannot be added into another campaign. Call getCampaigns to retrieve the campaign_id and the campaign status (RUNNING, PAUSED, ENDED, and so on) for all the seller's campaigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.

try {
    $apiInstance->pauseCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->pauseCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resumeCampaign**
> resumeCampaign($campaign_id)



This method resumes a paused campaign, as long as it's end date is in the future. Supply the campaign_id for the campaign you want to restart as a query parameter in the request. Call getCampaigns to retrieve the campaign_id and the campaign status (RUNNING, PAUSED, ENDED, and so on) for all the seller's campaigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.

try {
    $apiInstance->resumeCampaign($campaign_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->resumeCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCampaignIdentification**
> updateCampaignIdentification($campaign_id, $body)



This method replaces the name and the start and end dates of a campaign. Specify the campaign_id you want to update as a URI parameter, and configure the campaignName and startDate in the request payload. If you want to change only the end date of the campaign, specify the current campaign name and set startDate to the current date (you cannot use a start date that is in the past), and set the endDate as desired. Note that if you do not set a new end date in this call, any current endDate value will be set to null. To preserve the currently-set end date, you must specify the value again in your request. Call getCampaigns to retrieve a seller's campaign details, including the campaign ID, campaign name, and the start and end dates of the campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Nopolabs\EBay\Sell\Marketing\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Nopolabs\EBay\Sell\Marketing\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | A unique eBay-assigned ID for an ad campaign that's generated when a campaign is created. Get a seller's campaign IDs by calling getCampaigns.
$body = new \Nopolabs\EBay\Sell\Marketing\Model\UpdateCampaignIdentificationRequest(); // \Nopolabs\EBay\Sell\Marketing\Model\UpdateCampaignIdentificationRequest | This type defines the fields to updated the campaign name and start and end dates.

try {
    $apiInstance->updateCampaignIdentification($campaign_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCampaignIdentification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| A unique eBay-assigned ID for an ad campaign that&#39;s generated when a campaign is created. Get a seller&#39;s campaign IDs by calling getCampaigns. |
 **body** | [**\Nopolabs\EBay\Sell\Marketing\Model\UpdateCampaignIdentificationRequest**](../Model/UpdateCampaignIdentificationRequest.md)| This type defines the fields to updated the campaign name and start and end dates. |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

