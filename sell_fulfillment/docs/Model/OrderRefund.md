# OrderRefund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Nopolabs\EBay\Sell\Fulfillment\Model\Amount**](Amount.md) |  | [optional] 
**refund_date** | **string** | The date and time that the refund was issued. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the refund has been issued. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z | [optional] 
**refund_reference_id** | **string** | The eBay-generated unique identifier for the refund. This field is not returned until the refund has been issued. | [optional] 
**refund_status** | **string** | This enumeration value indicates the current status of the refund to the buyer. This container is always returned for each refund. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/RefundStatusEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


