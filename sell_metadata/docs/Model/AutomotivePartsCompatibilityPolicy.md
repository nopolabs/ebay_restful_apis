# AutomotivePartsCompatibilityPolicy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The category ID to which the automotive-parts-compatibility policies apply. | [optional] 
**category_tree_id** | **string** | This is a unique eBay-assigned value that represents the root node of the category tree to which the associated categoryId belongs. This value reflects the category tree related to the marketplace_id passed in the request. A category tree is a hierarchical framework of eBay categories that begins at the root node of the tree and extends to include all the child nodes in the tree. Each child node in the tree is an eBay category and each is represented by a unique categoryId value. Within a category tree, the root node has no parent node and leaf nodes are nodes that have no child nodes. | [optional] 
**compatibility_based_on** | **string** | Indicates whether the category supports parts compatibility by either ASSEMBLY or by SPECIFICATION. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/metadata/types/CompatibilityTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**compatible_vehicle_types** | **string[]** | Indicates the compatibility classification of the part based on high-level vehicle types. | [optional] 
**max_number_of_compatible_vehicles** | **int** | Specifies the maximum number of compatible vehicle-applications allowed per item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


