# FundingStrategy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bid_percentage** | **string** | The bid percentage sets the Promoted Listings fee to the percentage of the sale price that the seller is assessed when the listing sells via the Promoted Listings ad campaign. bid percentage is a single precision value, meaning: The following values are valid: &amp;nbsp;&amp;nbsp;&amp;nbsp;1, &amp;nbsp;&amp;nbsp;&amp;nbsp;1.0, &amp;nbsp;&amp;nbsp;&amp;nbsp;4.1, &amp;nbsp;&amp;nbsp;&amp;nbsp;5.0, &amp;nbsp;&amp;nbsp;&amp;nbsp;5.5, ... And these values are not valid: &amp;nbsp;&amp;nbsp;&amp;nbsp;0.01, &amp;nbsp;&amp;nbsp;&amp;nbsp;10.75, &amp;nbsp;&amp;nbsp;&amp;nbsp;99.99, &amp;nbsp;&amp;nbsp;&amp;nbsp;and so on. If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.Minimum value: 1.0 Maximum value: 100.0 | [optional] 
**funding_model** | **string** | Indicates the model that eBay uses to calculate the Promoted Listings fee. Currently, only COST_PER_SALE is supported. Default: COST_PER_SALE For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/marketing/types/FundingModelEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


