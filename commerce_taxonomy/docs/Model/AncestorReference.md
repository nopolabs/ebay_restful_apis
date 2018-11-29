# AncestorReference

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The unique identifier of the eBay ancestor category. Note: The root node of a full default category tree includes the categoryId field, but its value should not be relied upon. It provides no useful information for application development. | [optional] 
**category_name** | **string** | The canonical name of the ancestor category identified by categoryId. Note: Don&#39;t depend on category names to be unique within a given category tree. | [optional] 
**category_subtree_node_href** | **string** | The href portion of the getCategorySubtree call that retrieves the subtree below the ancestor category node. | [optional] 
**category_tree_node_level** | **int** | The absolute level of the ancestor category node in the hierarchy of its category tree. Note: The root node of any full category tree is always at level 0. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


