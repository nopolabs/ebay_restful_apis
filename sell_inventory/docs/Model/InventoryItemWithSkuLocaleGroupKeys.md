# InventoryItemWithSkuLocaleGroupKeys

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability** | [**\Nopolabs\EBay\Sell\Inventory\Model\Availability**](Availability.md) |  | [optional] 
**condition** | **string** | The numeric ID value of this field corresponds to the condition of the item. For a full list of condition identifiers, use the Trading API&#39;s GetCategoryFeatures call. Condition IDs can vary by category. - NEW, LIKE_NEW, NEW_OTHER, NEW_WITH_DEFECTS, MANUFACTURER_REFURBISHED, SELLER_REFURBISHED, USED_EXCELLENT,USED_VERY_GOOD, USED_GOOD, USED_ACCEPTABLE, FOR_PARTS_OR_NOT_WORKING For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/ConditionEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**condition_description** | **string** | This string field is used by the seller to more clearly describe the condition of used items, or items that are not &#39;Brand New&#39;, &#39;New with tags&#39;, or &#39;New in box&#39;. The ConditionDescription field is available for all categories. If the ConditionDescription field is used with an item in a new condition (Condition IDs 1000-1499), eBay will simply ignore this field if included, and eBay will return a warning message to the user. This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the item. Make sure that the condition value, condition description, listing description, and the item&#39;s pictures do not contradict one another.Max length: 1000. | [optional] 
**package_weight_and_size** | [**\Nopolabs\EBay\Sell\Inventory\Model\PackageWeightAndSize**](PackageWeightAndSize.md) |  | [optional] 
**product** | [**\Nopolabs\EBay\Sell\Inventory\Model\Product**](Product.md) |  | [optional] 
**sku** | **string** | The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell. | [optional] 
**locale** | **string** | This field is for future use only. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/LocaleEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**inventory_item_group_keys** | **string[]** | This returns the inventoryItemGroupKeys this inventory item is associated with for MSKU listings | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


