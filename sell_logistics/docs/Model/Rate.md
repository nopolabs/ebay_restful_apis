# Rate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_options** | [**\Nopolabs\EBay\Sell\Logistics\Model\AdditionalOption[]**](AdditionalOption.md) | Contains service and pricing information for one or more shipping options that are offered by the carrier and can be purchased in addition to the base shipping service provided by this rate. Shipping options can include items such as INSURANCE and SIGNATURE. | [optional] 
**base_shipping_cost** | [**\Nopolabs\EBay\Sell\Logistics\Model\Amount**](Amount.md) |  | [optional] 
**destination_time_zone** | **string** | The name of the time zone region, as defined in the IANA Time Zone Database, to which the package is being shipped. Delivery dates are calculated relative to this time zone. Note: This is different from a Coordinated Universal Time (UTC) offset. For example, the America/Los_Angeles time zone identifies a region with the UTC standard time offset of -08:00, but so do several other time zones, including America/Tijuana,America/Dawson, and Pacific/Pitcairn. | [optional] 
**max_estimated_delivery_date** | **string** | The latest stated date and time the shipment will be delivered at this rate. The time stamp is formatted as an ISO 8601 string, which is based on the 24-hour Universal Coordinated Time (UTC) clock. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2018-08-04T07:09:00.000Z | [optional] 
**min_estimated_delivery_date** | **string** | The estimated earliest date and time the shipment will be delivered at this rate. The time stamp is formatted as an ISO 8601 UTC string. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2018-08-06T01:00:00.000Z | [optional] 
**pickup_networks** | **string[]** | A list of pickup networks compatible with the shipping service. | [optional] 
**pickup_slots** | [**\Nopolabs\EBay\Sell\Logistics\Model\PickupSlot[]**](PickupSlot.md) | A list of available pickup slots for the package. | [optional] 
**pickup_type** | **string** | The type of pickup or drop-off service associated with the pickupSlots time frames. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/logistics/types/PickupTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**rate_id** | **string** | The unique eBay-assigned ID for this shipping rate. | [optional] 
**rate_recommendation** | **string[]** | A list of reasons this rate is recommended. Available values are: BUYER_CHOSEN &amp;mdash; The rate meets or exceeds the requirements of the buyer&#39;s preferred shipping option. CHEAPEST_ON_TIME &amp;mdash; The rate is the cheapest rate available that will provide delivery within the seller&#39;s time frame commitment. EBAY_PLUS_OK &amp;mdash; The rate complies with the shipping requirements of the eBay Plus program. FASTEST_ON_TIME &amp;mdash; The rate has the fastest shipping time, and will provide delivery within the seller&#39;s time frame commitment. GUARANTEED_DELIVERY_OK &amp;mdash; The rate complies with the shipping requirements of the eBay Guaranteed Delivery program. | [optional] 
**shipping_carrier_code** | **string** | The code name of the shipping carrier who will provide the service identified by shippingServiceCode. | [optional] 
**shipping_carrier_name** | **string** | The common name of the shipping carrier. | [optional] 
**shipping_service_code** | **string** | The code name of the shipping service to be provided by the carrier identified by shippingCarrierCode. | [optional] 
**shipping_service_name** | **string** | The common name of the shipping service. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


