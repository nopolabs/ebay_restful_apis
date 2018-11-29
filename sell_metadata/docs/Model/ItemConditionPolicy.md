# ItemConditionPolicy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The category ID to which the item-condition policy applies. | [optional] 
**category_tree_id** | **string** | The value returned in this field is a unique eBay-assigned value that represents the root node of the category tree to which the associated categoryId belongs. This value reflects the category tree related to the marketplace_id passed in the request. A category tree is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category and each is represented by a unique categoryId value. Within a category tree, the root node has no parent node and leaf nodes are nodes that have no child nodes. | [optional] 
**item_condition_required** | **bool** | This flag denotes whether or not you must list the item condition in a listing for the specified category. If set to true, you must specify an item condition for the associated category. | [optional] 
**item_conditions** | [**\Nopolabs\EBay\Sell\Metadata\Model\ItemCondition[]**](ItemCondition.md) | The item-condition values allowed in the category. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


