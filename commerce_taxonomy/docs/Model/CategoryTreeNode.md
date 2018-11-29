# CategoryTreeNode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\Nopolabs\EBay\Commerce\Taxonomy\Model\Category**](Category.md) |  | [optional] 
**category_tree_node_level** | **int** | The absolute level of the current category tree node in the hierarchy of its category tree. Note: The root node of any full category tree is always at level 0. | [optional] 
**child_category_tree_nodes** | [**\Nopolabs\EBay\Commerce\Taxonomy\Model\CategoryTreeNode[]**](CategoryTreeNode.md) | An array of one or more category tree nodes that are the immediate children of the current category tree node, as well as their children, recursively down to the leaf nodes. Returned only if the the current category tree node is not a leaf node (the value of leafCategoryTreeNode is false). | [optional] 
**leaf_category_tree_node** | **bool** | A value of true indicates that the current category tree node is a leaf node (it has no child nodes). A value of false indicates that the current node has one or more child nodes, which are identified by the childCategoryTreeNodes array. Returned only if the value of this field is true. | [optional] 
**parent_category_tree_node_href** | **string** | The href portion of the getCategorySubtree call that retrieves the subtree below the parent of this category tree node. Not returned if the current category tree node is the root node of its tree. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


