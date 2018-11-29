# ReportTaskPagedCollection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | The URI of the current page of the result set. | [optional] 
**limit** | **int** | Returns the value of the limit as set in the request. This defines the maximum number of reports to return on a page from the result set. | [optional] 
**next** | **string** | The URI for the next page from the result set. This value is returned only if there is a following page of results. | [optional] 
**offset** | **int** | Returns the value of the offset as set in the request. Specifies the number of report tasks to skip in the result set before returning the first report task in the paginated response. | [optional] 
**prev** | **string** | The URI for the previous page from the of result set. This value is returned only if there is a previous page of results. | [optional] 
**report_tasks** | [**\Nopolabs\EBay\Sell\Marketing\Model\ReportTask[]**](ReportTask.md) | A list of report tasks contained on this page from the paginated response. | [optional] 
**total** | **int** | The total number of items in the complete result set. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


