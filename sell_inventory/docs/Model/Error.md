# Error

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_id** | **int** | A unique code that identifies the particular error or warning that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms. | [optional] 
**domain** | **string** | The name of the domain in which the error or warning occurred. | [optional] 
**subdomain** | **string** | The name of the subdomain in which the error or warning occurred. | [optional] 
**category** | **string** | This string value indicates the error category. There are three categories of errors: request errors, application errors, and system errors. | [optional] 
**message** | **string** | A description of the condition that caused the error or warning. | [optional] 
**parameters** | [**\Nopolabs\EBay\Sell\Inventory\Model\ErrorParameter[]**](ErrorParameter.md) | Various warning and error messages return one or more variables that contain contextual information about the error or waring. This is often the field or value that triggered the error or warning. | [optional] 
**long_message** | **string** | A detailed description of the condition that caused the error or warning, and information on what to do to correct the problem. | [optional] 
**input_ref_ids** | **string[]** | An array of one or more reference IDs which identify the specific request element(s) most closely associated to the error or warning, if any. | [optional] 
**output_ref_ids** | **string[]** | An array of one or more reference IDs which identify the specific response element(s) most closely associated to the error or warning, if any. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


