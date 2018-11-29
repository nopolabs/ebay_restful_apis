# ComplianceDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason_code** | **string** | This value states the nature of the listing violation. A reasonCode value is returned for each listing violation, and each compliance type has several reason codes. For more information on PRODUCT_ADOPTION reason codes and how to revise your listings based on these reason codes, see the Using Compliance API reason codes to revise listings topic in the Product-Based Shopping Experience Playbook. The OUTSIDE_EBAY_BUYING_AND_SELLING reason codes include the following. For each of these violations, the seller will just need to remove this information with a revise listing call: UNAPPROVED_DOMAIN_WEBLINK_IN_LISTING PHONE_NUMBER_IN_LISTING EMAIL_ADDRESS_IN_LISTING The HTTPS reason codes include the following. For each of these violations, the seller will just need to remove the HTTP link from the listing details or product details: NON_SECURE_HTTP_LINK_IN_LISTING NON_SECURE_HTTP_LINK_IN_PRODUCT | [optional] 
**message** | **string** | This field provides a textual summary of the listing violation. A message field is returned for each listing violation. | [optional] 
**variation** | [**\Nopolabs\EBay\Sell\Compliance\Model\VariationDetails**](VariationDetails.md) |  | [optional] 
**violation_data** | [**\Nopolabs\EBay\Sell\Compliance\Model\NameValueList[]**](NameValueList.md) | Note: This container is for future use. Once it becomes available, this container will provide more information about the listing violation if applicable. The type of information that appears here will vary based on the compliance type and type of violation. | [optional] 
**corrective_recommendations** | [**\Nopolabs\EBay\Sell\Compliance\Model\CorrectiveRecommendations**](CorrectiveRecommendations.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


