# Definition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_type** | **string** | Indicates the date type of the dimension. For example, if the dimension is day, this value will be DATE. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/analytics/types/DataTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**key** | **string** | The value submitted in the dimension field or metric field of the request. Note: For dimension, this will be set to listing_ids if you are passing listing IDs into the filter parameter. | [optional] 
**localized_name** | **string** | A value that is translated into the language based on the value of the Accept-Language HTTP request header. For example, if Accept-Language is set to de-DE, the value &amp;quot;day&amp;quot; in the dimension container is returned as &amp;quot;tag&amp;quot; and a metric of TRANSACTION is set to &amp;quot;Transaktionsanzahl&amp;quot;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


