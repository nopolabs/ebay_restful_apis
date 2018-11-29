# RuleCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exclude_inventory_items** | [**\Nopolabs\EBay\Sell\Marketing\Model\InventoryItem[]**](InventoryItem.md) | A list of seller inventory reference IDs to exclude from the promotion. Note: The request can have either excludeInventoryItems or excludeListingIds but not both. Maximum: 100 parent items Maximum SKU or custom label length: 50 characters | [optional] 
**exclude_listing_ids** | **string[]** | A list of eBay listing IDs to exclude from the promotion. Note: The request can have either excludeInventoryItems or excludeListingIds but not both. Maximum: 100 parent items Maximum SKU or custom label length: 50 characters | [optional] 
**markup_inventory_items** | [**\Nopolabs\EBay\Sell\Marketing\Model\InventoryItem[]**](InventoryItem.md) | A list of SKUs to remove from a markdown promotion. The listed SKUs are &#39;marked up&#39; to their standard price after being part of the markdown promotion. | [optional] 
**markup_listing_ids** | **string[]** | A list of listing IDs to remove from a markdown promotion. The listed items are &#39;marked up&#39; to their standard price after being part of the markdown promotion. | [optional] 
**selection_rules** | [**\Nopolabs\EBay\Sell\Marketing\Model\SelectionRule[]**](SelectionRule.md) | Required if: inventoryCriterionType is set to INVENTORY_BY_RULE. The container for the rules that select the items to include in a promotion. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


