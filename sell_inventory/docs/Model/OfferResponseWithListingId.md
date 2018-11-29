# OfferResponseWithListingId

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status_code** | **int** | The HTTP status code returned in this field indicates the success or failure of publishing the offer specified in the &lt;strong&gt;offerId&lt;/strong&gt; field. See the &lt;strong&gt;HTTP status codes&lt;/strong&gt; table to see which each status code indicates. | [optional] 
**errors** | [**\Nopolabs\EBay\Sell\Inventory\Model\Error[]**](Error.md) | This container will be returned if there were one or more errors associated with publishing the offer. | [optional] 
**warnings** | [**\Nopolabs\EBay\Sell\Inventory\Model\Error[]**](Error.md) | This container will be returned if there were one or more warnings associated with publishing the offer. | [optional] 
**offer_id** | **string** | The unique identifier of the offer that the seller published (or attempted to publish). | [optional] 
**listing_id** | **string** | The unique identifier of the newly-created eBay listing. This field is only returned if the seller successfully published the offer and created the new eBay listing. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


