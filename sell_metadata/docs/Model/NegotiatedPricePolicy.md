# NegotiatedPricePolicy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**best_offer_auto_accept_enabled** | **bool** | This flag denotes whether or not the category supports the setting of a price at which best offers are automatically accepted. If set to true, the category does support the setting of an automatic price for best-offers. | [optional] 
**best_offer_auto_decline_enabled** | **bool** | This flag denotes whether or not the category supports the setting of an auto-decline price for best offers. If set to true, the category does support the setting of an automatic-decline price for best-offers. | [optional] 
**best_offer_counter_enabled** | **bool** | This flag denotes whether or not the category supports the setting for an automatic counter-offer on best offers. If set to true, the category does support the setting of an automatic counter-offer price for best-offers. | [optional] 
**category_id** | **string** | The category ID to which the negotiated-price policies apply. | [optional] 
**category_tree_id** | **string** | The value returned in this field is a unique eBay-assigned value that represents the root node of the category tree to which the associated categoryId belongs. This value reflects the category tree related to the marketplace_id passed in the request. A category tree is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category and each is represented by a unique categoryId value. Within a category tree, the root node has no parent node and leaf nodes are nodes that have no child nodes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


