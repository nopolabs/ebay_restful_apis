# Compatibility

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compatible_products** | [**\Nopolabs\EBay\Sell\Inventory\Model\CompatibleProduct[]**](CompatibleProduct.md) | This container consists of an array of motor vehicles (make, model, year, trim, engine) that are compatible with the motor vehicle part or accessory specified by the sku value. | [optional] 
**sku** | **string** | This is the seller-defined SKU value of the inventory item that will be associated with the compatible vehicles. This field is not applicable to the &lt;strong&gt;createOrReplaceProductCompatibility&lt;/strong&gt;  call, but it is always returned with the &lt;strong&gt;getProductCompatibility&lt;/strong&gt; call. For the the &lt;strong&gt;createOrReplaceProductCompatibility&lt;/strong&gt;  call, the SKU value for the inventory item is actually passed in as part of the call URI, and not in the request payload. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


