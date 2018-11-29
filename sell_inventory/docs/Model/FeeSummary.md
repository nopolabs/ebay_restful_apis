# FeeSummary

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warnings** | [**\Nopolabs\EBay\Sell\Inventory\Model\Error[]**](Error.md) | This container will contain an array of errors and/or warnings when a call is made, and errors and/or warnings occur. | [optional] 
**marketplace_id** | **string** | This is the unique identifier of the eBay site for which  listing fees for the offer are applicable. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/inventory/types/MarketplaceEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**fees** | [**\Nopolabs\EBay\Sell\Inventory\Model\Fee[]**](Fee.md) | This container is an array of listing fees that can be expected to be applied to an offer on the specified eBay marketplace (&lt;strong&gt;marketplaceId&lt;/strong&gt; value). Many fee types will get returned even when they are &lt;code&gt;0.0&lt;/code&gt;.&lt;br/&gt;&lt;br/&gt;See the &lt;a href&#x3D;\&quot;https://pages.ebay.com/help/sell/fees.html\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Standard selling fees&lt;/a&gt; help page for more information on listing fees. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


