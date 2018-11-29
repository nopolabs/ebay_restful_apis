# PurchasedRate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_options** | [**\Nopolabs\EBay\Sell\Logistics\Model\AdditionalOption[]**](AdditionalOption.md) | An list of additional, optional features that have been purchased for the shipment. | [optional] 
**base_shipping_cost** | [**\Nopolabs\EBay\Sell\Logistics\Model\Amount**](Amount.md) |  | [optional] 
**destination_time_zone** | **string** | The time zone of the destination according to Time Zone Database. For example, &amp;quot;America/Los_Angeles&amp;quot;. | [optional] 
**max_estimated_delivery_date** | **string** | A string value representing maximum (latest) estimated delivery time, formatted as an ISO 8601 UTC string. | [optional] 
**min_estimated_delivery_date** | **string** | A string value representing minimum (earliest) estimated delivery time, formatted as an ISO 8601 UTC string. | [optional] 
**pickup_networks** | **string[]** | A list of pickup networks compatible with the shipping service. | [optional] 
**pickup_slot_id** | **string** | This unique eBay-assigned ID value is returned only if the shipment has been configured for a scheduled pickup. | [optional] 
**pickup_type** | **string** | The type of pickup or drop off configured for the shipment. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/logistics/types/PickupTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**rate_id** | **string** | The eBay-generated ID of the shipping rate that the seller has chosen to purchase for the shipment. | [optional] 
**shipping_carrier_code** | **string** | The ID code for the carrier that was selected for the package shipment. | [optional] 
**shipping_carrier_name** | **string** | The name of the shipping carrier. | [optional] 
**shipping_quote_id** | **string** | The unique eBay-generated ID of the shipping quote from which the seller selected a shipping rate (rateId). | [optional] 
**shipping_service_code** | **string** | String ID code for the shipping service selected for the package shipment. This is a service that the shipping carrier supplies. | [optional] 
**shipping_service_name** | **string** | The name of the shipping service. | [optional] 
**total_shipping_cost** | [**\Nopolabs\EBay\Sell\Logistics\Model\Amount**](Amount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


