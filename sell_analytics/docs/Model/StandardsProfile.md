# StandardsProfile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cycle** | [**\Nopolabs\EBay\Sell\Analytics\Model\Cycle**](Cycle.md) |  | [optional] 
**default_program** | **bool** | If set to true, it indicates this is the default program. Except for sellers in China, a seller&#39;s default program is the site where the seller registered with eBay. Seller&#39;s in China select their default program when they register. | [optional] 
**evaluation_reason** | **string** | The type of logic used to calculate your overall seller level. eBay may override your calculated seller level if eBay determines there are special circumstances that warrant an override. In general, overrides performed by eBay protect your seller level. | [optional] 
**metrics** | [**\Nopolabs\EBay\Sell\Analytics\Model\Metric[]**](Metric.md) | A list of the metrics that contributed to the evaluation. See the applicable metrics and requirements for each program: eBay Top Rated seller program standards | [optional] 
**program** | **string** | Indicates the program to which the profile belongs. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/analytics/types/ProgramEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**standards_level** | **string** | Indicates the overall standards level of the seller. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/analytics/types/StandardsLevelEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


