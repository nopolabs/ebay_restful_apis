# PaymentHold

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expected_release_date** | **string** | The date and time that the payment being held is expected to be released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field will be returned if known by eBay. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z | [optional] 
**hold_amount** | [**\Nopolabs\EBay\Sell\Fulfillment\Model\Amount**](Amount.md) |  | [optional] 
**hold_reason** | **string** | The reason that the payment is being held. A seller&#39;s payment may be helf for a number of reasons, including when the seller is new, the seller&#39;s level is below standard, or if a return case or &#39;Significantly not as described&#39; case is pending against the seller. This field is always returned with the paymentHolds array. | [optional] 
**hold_state** | **string** | The current stage or condition of the hold. This field is always returned with the paymentHolds array. Applicable values: HELD HELD_PENDING NOT_HELD RELEASE_CONFIRMED RELEASE_FAILED RELEASE_PENDING RELEASED | [optional] 
**release_date** | **string** | The date and time that the payment being held was actually released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the seller&#39;s payment is actually released into the seller&#39;s account. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z | [optional] 
**seller_actions_to_release** | [**\Nopolabs\EBay\Sell\Fulfillment\Model\SellerActionsToRelease[]**](SellerActionsToRelease.md) | A list of one or more possible actions that the seller can take to release the hold on the payment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


