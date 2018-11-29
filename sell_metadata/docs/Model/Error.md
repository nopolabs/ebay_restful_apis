# Error

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The category type for this error or warning. It takes an ErrorCategory object which can have one of three values: Application: Indicates an exception or error occurred in the application code or at runtime. Examples include catching an exception in a service&#39;s business logic, system failures, or request errors from a dependency. Business: Used when your service or a dependent service refused to continue processing on the resource because of a business rule violation such as &amp;quot;Seller does not ship item to Antarctica&amp;quot; or &amp;quot;Buyer ineligible to purchase an alcoholic item&amp;quot;. Business errors are not syntactical input errors. Request: Used when there is anything wrong with the request, such as authentication, syntactical errors, rate limiting or missing headers, bad HTTP header values, and so on. | [optional] 
**domain** | **string** | Name of the domain containing the service or application. | [optional] 
**error_id** | **int** | A positive integer that uniquely identifies the specific error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. | [optional] 
**input_ref_ids** | **string[]** | Identifies specific request elements associated with the error, if any. inputRefId&#39;s response is format specific. For JSON, use JSONPath notation. | [optional] 
**long_message** | **string** | An expanded version of message that should be around 100-200 characters long, but is not required to be such. | [optional] 
**message** | **string** | An end user and app developer friendly device agnostic message. It explains what the error or warning is, and how to fix it (in a general sense). Its value is at most 50 characters long. If applicable, the value is localized in the end user&#39;s requested locale. | [optional] 
**output_ref_ids** | **string[]** | Identifies specific response elements associated with the error, if any. Path format is the same as inputRefId. | [optional] 
**parameters** | [**\Nopolabs\EBay\Sell\Metadata\Model\ErrorParameter[]**](ErrorParameter.md) | This optional complex field type contains a list of one or more context-specific ErrorParameter objects, with each item in the list entry being a parameter (or input field name) that caused an error condition. Each ErrorParameter object consists of two fields, a name and a value. | [optional] 
**subdomain** | **string** | Name of the domain&#39;s subsystem or subdivision. For example, checkout is a subdomain in the buying domain. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


