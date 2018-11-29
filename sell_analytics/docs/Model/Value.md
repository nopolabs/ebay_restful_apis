# Value

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicable** | **bool** | This indicates if the value is valid. A value is valid if the service was able to computed it. When this value is false it means one of the values in the calculation was zero and will be rare. For example, a buyer is viewing the item at 11:59pm but purchased it at 12:10am, if this was the only view for that day, there would be 1 transaction and no views. For dimensionValues, this will always be set to true. | [optional] 
**value** | **object** | The value of the object. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


