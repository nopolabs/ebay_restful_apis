# ProductAspectConstraint

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aspect_data_type** | **string** | The data type used to represent the aspect. See the AspectDataTypeEnum type for more information about each data type. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/AspectDataTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**aspect_format** | **string** | Returned only if the value of aspectDataType is STRING or NUMBER. The required format for date or number values (e.g. a date value may be expressed as MMYYYY or MMYY). | [optional] 
**aspect_mode** | **string** | Indicates whether the seller must select from a closed list of aspect values, or can input the aspect value manually. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/AspectModeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**aspect_required** | **bool** | A value of true indicates that the aspect is mandatory for products listed in this category. | [optional] 
**importance** | **string** | This value indicates the level of importance of the product identifier appearing in the catalog product. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ImportanceEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**product_to_aspect_cardinality** | **string** | Indicates whether the aspect requires only one value, or can accept multiple values when listing in this category. An example of a product aspect that will often have numerous values is Features. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ItemToAspectCardinalityEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


