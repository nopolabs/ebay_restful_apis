# Payment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Nopolabs\EBay\Sell\Fulfillment\Model\Amount**](Amount.md) |  | [optional] 
**payment_date** | **string** | The date and time that the payment was received by the seller. This field will not be returned if buyer has yet to pay for the order. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z | [optional] 
**payment_holds** | [**\Nopolabs\EBay\Sell\Fulfillment\Model\PaymentHold[]**](PaymentHold.md) | This container is only returned if eBay is temporarily holding the seller&#39;s funds for the order. If a payment hold has been placed on the order, this container includes the reason for the payment hold, the expected release date of the funds into the seller&#39;s account, the current state of the hold, and as soon as the payment hold has been released, the actual release date. | [optional] 
**payment_method** | **string** | The payment method used by the buyer to pay for the order. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/PaymentMethodTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**payment_reference_id** | **string** | This field is only returned if payment has been made by the buyer, and the paymentMethod is PAYPAL. This field contains the PayPal-generated transaction identifier. | [optional] 
**payment_status** | **string** | The enumeration value returned in this field indicates the status of the buyer&#39;s payment for the order. See the PaymentStatusEnum type definition for more information on the possible payment states. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/PaymentStatusEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


