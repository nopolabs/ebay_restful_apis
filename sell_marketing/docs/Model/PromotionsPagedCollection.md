# PromotionsPagedCollection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | The URI of the current page of results. | [optional] 
**limit** | **int** | The value of the limit parameter submitted in the request, which is the maximum number of promotions returned on a page from the result set. | [optional] 
**next** | **string** | The URI for the next page of results. This value is returned if there is another page of results to return from the result set. | [optional] 
**offset** | **int** | The value of the offset submitted in the request, which is the number of promotions to skip before returning the first result. | [optional] 
**prev** | **string** | The URI for the previous set of results. This is returned if there is a previous page of results in the result set. | [optional] 
**promotions** | [**\Nopolabs\EBay\Sell\Marketing\Model\PromotionDetail[]**](PromotionDetail.md) | A list containing the details of each returned promotion. This includes all the information about the promotions except for the listings that are part of the promotions. | [optional] 
**total** | **int** | The total number of promotions in the result set. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


