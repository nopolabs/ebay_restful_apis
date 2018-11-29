# DeleteAdsByInventoryReferenceResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_ids** | **string[]** | The list of ad IDs that were removed from the campaign. | [optional] 
**errors** | [**\Nopolabs\EBay\Sell\Marketing\Model\Error[]**](Error.md) | The container for the errors associated with the request. | [optional] 
**inventory_reference_id** | **string** | The seller&#39;s inventory reference ID for a listing that&#39;s associated with the ad. An inventory reference ID can be either a seller-defined SKU value or an inventoryItemGroupKey. An inventoryItemGroupKey is a value used by the Inventory API to indicate a listing that&#39;s the parent of a inventory item group (a multi-variation listing, such as a listing for shirt that&#39;s available in multiple sizes and colors). You must always specify both an inventory_reference_id and an inventory_reference_type. | [optional] 
**inventory_reference_type** | **string** | Indicates the item type of the listing referenced by inventoryReferenceId, and can be either INVENTORY_ITEM or INVENTORY_ITEM_GROUP. You must always pair an inventory_reference_id with and inventory_reference_type. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/marketing/types/InventoryReferenceTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**status_code** | **int** | An HTTP status code that indicates the response-status of the request. Check this code to see if the ads were successfully deleted. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


