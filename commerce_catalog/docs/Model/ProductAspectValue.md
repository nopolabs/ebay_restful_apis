# ProductAspectValue

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | A supported value of the corresponding product aspect (shown in the aspects.name field). Every supported value for the product aspect is shown under the aspects.values container. Note that one of these values can possibly be used instead of the product aspect value(s) currently defined for the eBay Catalog product and specified in the aspects.valuesAssociatedWithProduct array. | [optional] 
**value_constraints** | [**\Nopolabs\EBay\Commerce\Catalog\Model\ValueConstraint[]**](ValueConstraint.md) | Not returned if the value of the value field can always be selected for this aspect of the specified category. Contains a list of the dependencies that identify when the value of the value field is available for the current aspect. Each dependency specifies the values of another aspect of the same category (a control aspect), for which the current value of the current aspect can also be selected by the seller. Example: A shirt is available in three sizes and three colors, but only the Small and Medium sizes come in Green. Thus for the Color aspect, the value Green is constrained by its dependency on Size (the control aspect). Only when the Size aspect value is Small or Medium, can the Color aspect value of Green be selected by the seller. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


