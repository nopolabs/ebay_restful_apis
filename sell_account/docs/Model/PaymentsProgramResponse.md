# PaymentsProgramResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The ID of the eBay marketplace to which the payment policy applies. If this value is not specified in the request, the value defaults to the seller&#39;s eBay registration site. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**payments_program_type** | **string** | This path parameter specifies the payment program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/account/types/PaymentsProgramType.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**status** | **string** | For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/account/types/PaymentsProgramStatus.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**was_previously_opted_in** | **bool** | If set to true, the seller was at one point opted-in to the associated payment program, but they later opted out of the program. A value of false indicates the seller never opted-in to the program or if they did opt-in to the program, they never opted-out of it. It&#39;s important to note that the setting of this field does not indicate the seller&#39;s current status regarding the payment program. It is possible for this field to return true while the status field returns OPTED_IN. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


