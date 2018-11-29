# CloneCampaignRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_name** | **string** | A seller-defined name for the newly-cloned campaign. This value must be unique for the seller. You can use any alphanumeric characters in the name, except the less than (&amp;lt;) or greater than (&amp;gt;) characters.Max length: 80 characters | [optional] 
**end_date** | **string** | The date and time the campaign ends, in UTC format (yyyy-MM-ddThh:mm.ss.sssZ). If this field is blank (code&amp;gt;null), it indicates a campaign that has no end date. For display purposes, convert this time into the local time of the seller. | [optional] 
**funding_strategy** | [**\Nopolabs\EBay\Sell\Marketing\Model\FundingStrategy**](FundingStrategy.md) |  | [optional] 
**start_date** | **string** | The date and time the cloned campaign starts, in UTC format (yyyy-MM-ddThh:mm.ss.sssZ). For display purposes, convert this time into the local time of the seller. On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign. Call getCampaign to check the status of the campaign. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


