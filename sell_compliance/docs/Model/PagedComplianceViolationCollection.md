# PagedComplianceViolationCollection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | The distance {number of records) from the first policy violation in the collection to the first policy violation in this result set. In the call request, you can use the offset parameter in conjunction with the limit parameter to control the pagination of the output. For example, if offset is set to 30 and limit is set to 10, the call retrieves policy violations 31 thru 40 from the resulting collection of policy violations. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. Default: 0 {zero) | [optional] 
**href** | **string** | The URI of the getListingViolations call request that produced this result set. | [optional] 
**total** | **int** | The total number of policy violations in the collection. Note: If no policy violations are found, this field is returned with a value of 0. | [optional] 
**next** | **string** | The getListingViolations call URI for the next result set. For example, the following URI returns policy violations 41 thru 50 from the collection of policy violations: path/listing_violation?limit&#x3D;10&amp;amp;offset&#x3D;40 This field is only returned if an additional page of listing violations exists. | [optional] 
**prev** | **string** | The getListingViolations call URI for the previous result set. For example, the following URI returns policy violations 21 thru 30 from the collection of policy violations: path/listing_violation?limit&#x3D;10&amp;amp;offset&#x3D;20 Note: This feature employs a zero-based list, where the first policy violation in the list has an offset of 0. This field is only returned if a previous page of listing violations exists. | [optional] 
**limit** | **int** | The maximum number of policy violations returned in the current result set. Note: If this is the last or only result set in the collection, it may contain fewer listing violations. To determine the number of result sets in the collection, divide this into the value of total and round up to the next integer. Default: 50 Max: 200 | [optional] 
**listing_violations** | [**\Nopolabs\EBay\Sell\Compliance\Model\ComplianceViolation[]**](ComplianceViolation.md) | An array of listing violations that match the criteria in the call request, including pagination control {if set). An empty array is returned if no listing violations are found. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


