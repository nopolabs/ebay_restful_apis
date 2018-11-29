# ProductAdoptionPolicy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The category ID to which the listing policies apply. | [optional] 
**category_tree_id** | **string** | The value returned in this field is a unique eBay-assigned value that represents the root node of the category tree to which the associated categoryId belongs. This value reflects the category tree related to the marketplace_id passed in the request. A category tree is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category and each is represented by a unique categoryId value. Within a category tree, the root node has no parent node and leaf nodes are nodes that have no child nodes. | [optional] 
**exclusion** | [**\Nopolabs\EBay\Sell\Metadata\Model\Exclusion**](Exclusion.md) |  | [optional] 
**product_required** | **bool** | If set to true, items must include an ePID value in their item description before they can be listed in the category identified by the associated categoryId. In contrast, a value of false indicates that items listed in the associated category do not require ePID values. Important! It is possible for a productAdoptionPolicies container to not contain this productRequired field. This occurs if the eBay category is not part of the PBSE Phase 1 or Phase 2 mandate. In these scenarios, please treat the response the same as if this field were present and contained a value of false. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


