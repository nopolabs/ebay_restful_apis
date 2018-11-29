# Report

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimension_metadata** | [**\Nopolabs\EBay\Sell\Analytics\Model\Metadata[]**](Metadata.md) | The container that returns the metadata of the dimension. | [optional] 
**end_date** | **string** | The end date range for the data in this report. If you specify an end date that is beyond the lastUpdatedDate value, eBay returns a report that contains data only up to that date. | [optional] 
**header** | [**\Nopolabs\EBay\Sell\Analytics\Model\Header**](Header.md) |  | [optional] 
**last_updated_date** | **string** | The date and time the report was last updated. | [optional] 
**records** | [**\Nopolabs\EBay\Sell\Analytics\Model\Record[]**](Record.md) | The container for the individual records. | [optional] 
**start_date** | **string** | The start of the date range that the report covers. | [optional] 
**warnings** | [**\Nopolabs\EBay\Sell\Analytics\Model\Error[]**](Error.md) | An array of any process errors or warnings that were generated during the call processing. This is applicable only when you specify a set of listing IDs. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


