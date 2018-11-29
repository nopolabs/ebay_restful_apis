# Metric

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**level** | **string** | Indicates the seller level for this metric. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/analytics/types/StandardsLevelEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**lookback_end_date** | **string** | The end date of the period during which the seller was evaluated for the associated metric. | [optional] 
**lookback_start_date** | **string** | The beginning date of the period during which the seller was evaluated for the associated metric. | [optional] 
**metric_key** | **string** | The name of the metric. For example, Defect rate. | [optional] 
**name** | **string** | The complete name of the metric for which the seller is being evaluated. This value is localized according to the value of the X-EBAY-C-MARKETPLACE-ID request header. | [optional] 
**threshold_lower_bound** | **object** | The lower limit of the metric threshold used in the evaluation. Each program can have different threshold levels. | [optional] 
**threshold_meta_data** | **string** | Expression for the type of metric, and the inclusive and exclusive characteristics of the upper and lower bounds of the threshold. Thresholds are shown for either a count or a rate. For example, the following metadata means that to maintain the level for this metric, you must continue to have a value of 90 or better, and there is no upper bound for this metric: [90, NA) Metadata values are enclosed by parentheses and/or square brackets. A parenthesis means the adjacent value is exclusive, while a square bracket means the adjacent value is inclusive. | [optional] 
**threshold_upper_bound** | **object** | The upper limit of the metric threshold used in the evaluation. Each program can have different threshold levels. | [optional] 
**type** | **string** | Indicates the data type of the returned metric, such as a string or integer value. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/analytics/types/DataTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**value** | **object** | The seller&#39;s value, or score, for the metric. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


