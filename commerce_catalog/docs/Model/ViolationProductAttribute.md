# ViolationProductAttribute

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the product attribute type in the change request which is in violation, such as BRAND, CATEGORY, or TITLE. See the ProductAttributeName type for available values. Note: If the value of this field is ASPECT_NAME, see violations.aspectsValues for violation information. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ProductAttributeName.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**values** | **string[]** | Not returned if the value of name is ASPECT_NAME (see instead violations.aspectsValues). This is a list of the named attribute&#39;s values that are in violation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


