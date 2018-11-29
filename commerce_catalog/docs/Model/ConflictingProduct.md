# ConflictingProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conflict_code** | **string** | The eBay assigned identifier of this conflict. | [optional] 
**differentiating_aspects** | [**\Nopolabs\EBay\Commerce\Catalog\Model\ProductAspect[]**](ProductAspect.md) | Contains information about one or more aspects of the conflicting product, which the seller&#39;s change request either duplicates or provides similar values. The seller should either accept the conflicting product&#39;s aspects and values and adopt the product as is, or submit a change request to create or update a product that doesn&#39;t conflict with an existing product record. | [optional] 
**epid** | **string** | The eBay product ID of the conflicting catalog product. | [optional] 
**reason** | **string** | The reason for this conflict. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


