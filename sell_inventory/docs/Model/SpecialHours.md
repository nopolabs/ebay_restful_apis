# SpecialHours

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | A &lt;strong&gt;date&lt;/strong&gt; value is required for each specific date that the store location has special operating hours. The date is actually expressed as a time stamp specified in &lt;a href&#x3D;\&quot;http://www.iso.org/iso/home/standards/iso8601.htm\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO 8601&lt;/a&gt; format, which uses the 24-hour Coordinated Universal Time (UTC) clock. The following examples show (1) the format of the time-stamp, and (2) an example time value in ISO 8601 format: &lt;br&gt;&lt;br&gt;&lt;b&gt;Format:&lt;/b&gt; &lt;code&gt;yyyy-MM-ddThh:mm:ssZ&lt;/code&gt; &lt;br /&gt;&lt;b&gt;Example:&lt;/b&gt; &lt;code&gt;2016-10-19T00:09:00Z&lt;/code&gt; &lt;br&gt;&lt;br&gt;This field is returned if set for the store location. | [optional] 
**intervals** | [**\Nopolabs\EBay\Sell\Inventory\Model\Interval[]**](Interval.md) | This container is used to define the opening and closing times of a store on a specific date (defined in the &lt;strong&gt;date&lt;/strong&gt; field). An &lt;strong&gt;intervals&lt;/strong&gt; container is needed for each specific date that the store has special operating hours. These special operating hours on the specific date override the normal operating hours for the specific day of the week. If a store location closes for lunch (or any other period during the day) and then reopens, multiple &lt;strong&gt;open&lt;/strong&gt; and &lt;strong&gt;close&lt;/strong&gt; pairs are needed. &lt;br&gt;&lt;br&gt;This container is returned if set for the store location. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


