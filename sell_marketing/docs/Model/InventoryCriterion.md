# InventoryCriterion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inventory_criterion_type** | **string** | Indicates how the items to include in the promotion are selected. You can include inventory by ID, using rules, or globally include all your inventory. Valid values: INVENTORY_BY_RULE INVENTORY_BY_VALUE INVENTORY_ANY For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/marketing/types/InventoryCriterionEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**inventory_items** | [**\Nopolabs\EBay\Sell\Marketing\Model\InventoryItem[]**](InventoryItem.md) | Required if: InventoryCriterionType is set to INVENTORY_BY_VALUE, you must specify either inventoryItems or listingIds. An array of containers for the seller&#39;s inventory reference IDs (also known as an &amp;quot;SKU&amp;quot; or &amp;quot;custom label&amp;quot;) to be added to the promotion. Note: The request can have either inventoryItems or listingIds, but not both. Required: All listings in a promotion must offer PayPal as a payment method. Maximum: 500 parent items Maximum SKU or custom label length: 50 characters | [optional] 
**listing_ids** | **string[]** | Required if: InventoryCriterionEnum is set to INVENTORY_BY_VALUE, you must specify either inventoryItems or listingIds. An array of eBay listing IDs to be added to the promotion. Note: The request can have either inventoryItems or listingIds, but not both. Required: All listings in a promotion must offer PayPal as a payment method. Maximum: 500 parent items | [optional] 
**rule_criteria** | [**\Nopolabs\EBay\Sell\Marketing\Model\RuleCriteria**](RuleCriteria.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


