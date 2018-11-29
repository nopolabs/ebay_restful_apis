# CampaignCriterion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_select_future_inventory** | **bool** | If set to true, eBay adds all inventory matching the campaign criterion to the campaign, including any new listings created from the items in your inventory. In other words, if you create a new listing, and it is is eligible for the Promoted Listings campaign (it is a multiple-quantity fixed-price listing that matches the selection rules of the campaign), it will be automatically added to the campaign.Default: false | [optional] 
**criterion_type** | **string** | This enum defines the criterion (selection rule) types. Currently, the only criterion type supported is INVENTORY_PARTITION. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/marketing/types/CriterionTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**selection_rules** | [**\Nopolabs\EBay\Sell\Marketing\Model\SelectionRule[]**](SelectionRule.md) | Set of rules that selects the listings to include in the campaign. The following rules apply to the selection rules: Each set of selection rules are ORed with each other. Individual rules within a selection rule set are ANDed with each other. If a rule has a list of values (such a list of category IDs), the item need match only one of the values of the rule in order to be included in the campaign. Note: If an item matches multiple sets of rules or multiple rules within a selection rule set, the item is considered only once.Maximum number of rules: 10 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


