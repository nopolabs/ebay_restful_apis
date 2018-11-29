# CorrectionProductAttribute

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attribute_name** | **string** | The name of the product attribute type in the change request which requires correction, such as BRAND, CATEGORY, or TITLE. See the ProductAttributeName type for available values. Note: If the value of this field is ASPECT_NAME, see corrections.aspectValues for correction information. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ProductAttributeName.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**new_value** | **string** | Not returned if the value of attributeName is ASPECT_NAME (see instead corrections.aspectValues). This is the named attribute&#39;s correct value. | [optional] 
**value** | **string** | Not returned if the value of attributeName is ASPECT_NAME (see instead corrections.aspectValues). This is the named attribute&#39;s current incorrect value. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


