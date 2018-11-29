# ProductMetadataAspect

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aspect_help_text** | **string** | Returned only if this field is populated. This provides information and context for the product aspect. The help text can be presented to the seller to clarify the intended purpose of the aspect, and recommendations for its use. For example, the help text for the Country/Region of Manufacture aspect is: Specifying the country/region of manufacture can help streamline customs clearance. | [optional] 
**constraint** | [**\Nopolabs\EBay\Commerce\Catalog\Model\ProductAspectConstraint**](ProductAspectConstraint.md) |  | [optional] 
**droppable** | **bool** | A value of true indicates that this product aspect can be removed from the specified catalog product definition by omitting it from a product change request. A value of false indicates that this product aspect cannot be dropped (although it is possible that its value could be modified). | [optional] 
**name** | **string** | The name of the product aspect, such as Model Number, Size, or Color. | [optional] 
**values** | [**\Nopolabs\EBay\Commerce\Catalog\Model\ProductAspectValue[]**](ProductAspectValue.md) | Not returned if the value of the constraint field is FREE_TEXT and there are no stored values for this aspect. Contains information about the supported values for the product aspect identified by the name field, as well as constraint information for the product aspect values. These values can be used instead of the product aspect value(s) currently defined for the eBay Catalog product, and those specified in the valuesAssociatedWithProduct array. | [optional] 
**values_associated_with_product** | **string[]** | The value(s) currently defined for the eBay Catalog product for the product aspect identified by the corresponding name field. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


