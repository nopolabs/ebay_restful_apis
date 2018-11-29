# ReturnPolicyDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policy_description_enabled** | **bool** | If set to true, this flag indicates you can supply a detailed return policy description within your return policy (for example, by populating the returnInstructions field in the Account API&#39;s createReturnPolicy). User-supplied return policy details are allowed only in the DE, ES, FR, and IT marketplaces. | [optional] 
**refund_methods** | **string[]** | A list of refund methods allowed for the associated category. | [optional] 
**return_methods** | **string[]** | A list of return methods allowed for the associated category. | [optional] 
**return_periods** | [**\Nopolabs\EBay\Sell\Metadata\Model\TimeDuration[]**](TimeDuration.md) | A list of return periods allowed for the associated category. Note that different APIs require you to enter the return period in different ways. For example, the Account API uses the complex TimeDuration type, which takes two values (a unit and a value), whereas the Trading API takes a single value (such as Days_30). | [optional] 
**returns_acceptance_enabled** | **bool** | If set to true, this flag indicates the seller can configure how they handle domestic returns. | [optional] 
**return_shipping_cost_payers** | **string[]** | A list of allowed values for who pays for the return shipping cost. Note that for SNAD returns, the seller is always responsible for the return shipping cost. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


