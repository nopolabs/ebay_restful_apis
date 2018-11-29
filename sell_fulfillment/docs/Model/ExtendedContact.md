# ExtendedContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company_name** | **string** | The company name associated with the buyer or eBay shipping partner. This field is only returned if defined/applicable to the buyer or eBay shipping partner. | [optional] 
**contact_address** | [**\Nopolabs\EBay\Sell\Fulfillment\Model\Address**](Address.md) |  | [optional] 
**email** | **string** | This field shows the email address of the buyer. The email address of a buyer will be masked 14 days after order creation. This field will still be returned for the order, but it will not contain the buyer&#39;s email address, but instead, something like &#39;Invalid Request&#39;. Note: This field always contains the email address of the buyer even with a Global Shipping Program shipment. | [optional] 
**full_name** | **string** | The full name of the buyer or eBay shipping partner. | [optional] 
**primary_phone** | [**\Nopolabs\EBay\Sell\Fulfillment\Model\PhoneNumber**](PhoneNumber.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


