# CreateAdsByInventoryReferenceResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ads** | [**\Nopolabs\EBay\Sell\Marketing\Model\AdReference[]**](AdReference.md) | A list of ad IDs (based on their inventory reference IDs) and the URIs that point to them. | [optional] 
**errors** | [**\Nopolabs\EBay\Sell\Marketing\Model\Error[]**](Error.md) | An array of errors or warnings associated with the create-ads request. | [optional] 
**inventory_reference_id** | **string** | The seller&#39;s inventory reference ID that&#39;s associated with the ad. | [optional] 
**inventory_reference_type** | **string** | Indicates the item type of the listing referenced by inventoryReferenceId, and can be either INVENTORY_ITEM or INVENTORY_ITEM_GROUP. You must always pair an inventory_reference_id with and inventory_reference_type. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/marketing/types/InventoryReferenceTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**status_code** | **int** | An HTTP status code that indicates the response-status of the request. Check this code to see if the ads were successful created. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


