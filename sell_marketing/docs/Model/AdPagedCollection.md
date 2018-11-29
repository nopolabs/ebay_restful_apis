# AdPagedCollection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ads** | [**\Nopolabs\EBay\Sell\Marketing\Model\Ad[]**](Ad.md) | A list of ads contained on this page from the paginated response. | [optional] 
**href** | **string** | The URI of the current page of the result set. | [optional] 
**limit** | **int** | Returns the value of the limit as set in the request. This defines the maximum number of ads to return on a page from the result set. | [optional] 
**next** | **string** | The URI for the next page from the result set. This value is returned only if there is a following page of results. | [optional] 
**offset** | **int** | Returns the value of the offset as set in the request. Specifies the number of ads to skip in the result set before returning the first ad in the paginated response. | [optional] 
**prev** | **string** | The URI for the previous page from the of result set. This value is returned only if there is a previous page of results. | [optional] 
**total** | **int** | The total number of ads in the complete result set. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


