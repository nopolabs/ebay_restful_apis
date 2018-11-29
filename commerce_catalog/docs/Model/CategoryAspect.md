# CategoryAspect

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aspect_help_text** | **string** | Returned only if this field is populated. This provides information and context for the category aspect. The help text can be presented to the seller to clarify the intended purpose of this aspect, and recommendations for its use. For example, the help text for the Country/Region of Manufacture aspect is: Specifying the country/region of manufacture can help streamline customs clearance. | [optional] 
**constraint** | [**\Nopolabs\EBay\Commerce\Catalog\Model\ProductAspectConstraint**](ProductAspectConstraint.md) |  | [optional] 
**name** | **string** | The name of the category aspect. | [optional] 
**values** | [**\Nopolabs\EBay\Commerce\Catalog\Model\CategoryAspectValue[]**](CategoryAspectValue.md) | Not returned if the value of the constraint field is FREE_TEXT and there are no stored values for this aspect. Contains information about one or more supported values for the category identified by the name field), as well as constraint information for those values. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


