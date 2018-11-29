# Shipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancellation** | [**\Nopolabs\EBay\Sell\Logistics\Model\ShipmentCancellation**](ShipmentCancellation.md) |  | [optional] 
**creation_date** | **string** | The date and time the shipment was created, formatted as an ISO 8601 UTC string. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2018-08-06T01:00:00.000Z | [optional] 
**label_custom_message** | **string** | If supported by the selected shipping carrier, this field can contain optional seller text to be printed on the shipping label. | [optional] 
**label_download_url** | **string** | The direct URL the seller can use to download an image of the shipping label. By default, the file format is PDF. See downloadLabelFile for requesting different response file formats. | [optional] 
**label_size** | **string** | The seller&#39;s desired label size. The support for multi-sized labels is shipping-carrier specific and if the size requested in the creaateFromShippingQuote call matches a size the carrier supports, the value will be represented here in the shipment. Currently, the only valid value is: 4&amp;quot;x6&amp;quot; | [optional] 
**orders** | [**\Nopolabs\EBay\Sell\Logistics\Model\Order[]**](Order.md) | This list value is optionally assigned by the seller. When present, each element in the returned list contains seller-assigned information about an order (such as an order number). Because a package can contain all or part of one or more orders, this field provides a way for sellers to identify the packages that contain specific orders. | [optional] 
**package_specification** | [**\Nopolabs\EBay\Sell\Logistics\Model\PackageSpecification**](PackageSpecification.md) |  | [optional] 
**rate** | [**\Nopolabs\EBay\Sell\Logistics\Model\PurchasedRate**](PurchasedRate.md) |  | [optional] 
**return_to** | [**\Nopolabs\EBay\Sell\Logistics\Model\Contact**](Contact.md) |  | [optional] 
**ship_from** | [**\Nopolabs\EBay\Sell\Logistics\Model\Contact**](Contact.md) |  | [optional] 
**shipment_id** | **string** | The unique eBay-assigned ID for the shipment. The ID is generated when the shipment is created by a call to createFromShippingQuote. | [optional] 
**shipment_tracking_number** | **string** | A unique carrier-assigned ID string that can be used to track the shipment. | [optional] 
**ship_to** | [**\Nopolabs\EBay\Sell\Logistics\Model\Contact**](Contact.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


