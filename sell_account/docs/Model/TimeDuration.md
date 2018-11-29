# TimeDuration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**unit** | **string** | Required in the TimeDuration container. A time-measurement unit used to specify a period of time. Time-measurement units can be years, months, days, hours, minutes, and other time units (see TimeDurationUnitEnum for a complete list of possible units). The unit is applied to the number in the value field to define a span of time. See the containing object for details and call GeteBayDetails in the Trading API to get the allowable values for the specific object you&#39;re configuring. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/account/types/TimeDurationUnitEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**value** | **int** | Required in the TimeDuration container. An amount of time, as measured by the time-measurement units specified in the unit field. Supported values for this field vary according to the object using the time duration. See the containing object for details and call GeteBayDetails in the Trading API to get the allowable values for the specific object you&#39;re configuring. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


