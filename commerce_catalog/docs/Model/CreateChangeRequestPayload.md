# CreateChangeRequestPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**change_request_type** | **string** | The type of catalog modification being requested by this change request. Available values: PRODUCT_CREATION &amp;mdash; Change request to create a new product PRODUCT_UPDATE &amp;mdash; Change request to update an existing product For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ChangeRequestType.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**reason_for_change_request** | **string** | Required if the value of changeRequestType is PRODUCT_UPDATE, and optional otherwise; this is a text description of why this change is being requested. | [optional] 
**reference_id** | **string** | Required if the referenceType field is included in the request. This is the identifier of an object of the type specified by the value of referenceType. For example, if the value of referenceType is INVENTORY_ITEM, this field should contain the seller&#39;s SKU for an inventory item. | [optional] 
**reference_type** | **string** | The type of object that the requested change is intended to support. This applies to objects that are incomplete due to the need for a matching catalog product. Providing a referenceType and a referenceId in a catalog change request enables eBay to automatically apply the resulting new or updated product directly to the specified object without requiring additional action on your part. Available values: INVENTORY_ITEM &amp;mdash; The requested change will support the completion of an inventory item, which you can then use to create an offer. LISTING &amp;mdash; The requested change will support the modification of an active product listing. LISTING_DRAFT &amp;mdash; The requested change will support the completion of an offer, which you can then publish as a product listing. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ReferenceType.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**suggested_product** | [**\Nopolabs\EBay\Commerce\Catalog\Model\SuggestedProduct**](SuggestedProduct.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


