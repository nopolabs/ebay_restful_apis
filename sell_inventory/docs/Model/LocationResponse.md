# LocationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | This is the URL to the current page of inventory locations. &lt;br&gt;&lt;br&gt;&lt;b&gt;Max length&lt;/b&gt;: 2048 | [optional] 
**limit** | **int** | This integer value is the the number of inventory locations that will be displayed on each results page. | [optional] 
**locations** | [**\Nopolabs\EBay\Sell\Inventory\Model\InventoryLocationResponse[]**](InventoryLocationResponse.md) | An array of one or more of the merchant&#39;s inventory locations. | [optional] 
**next** | **string** | This is the URL to the next page of inventory locations. This field is returned only if there are additional inventory locations to view. &lt;br&gt;&lt;br&gt;&lt;b&gt;Max length&lt;/b&gt;: 2048 | [optional] 
**offset** | **int** | Returns how many result sets were skipped before the currently returned result set. If this value is &lt;code&gt;0&lt;/code&gt;, it indicates that you&#39;re looking at the first result set. | [optional] 
**prev** | **string** | This is the URL to the previous page of inventory locations. This field is returned only if there are previous inventory locations to view. &lt;br&gt;&lt;br&gt;&lt;b&gt;Max length&lt;/b&gt;: 2048 | [optional] 
**total** | **int** | Returns the total number of inventory locations in the paginated collection. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


