# PriceQuantityResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status_code** | **int** | The value returned in this container will indicate the status of the attempt to update the price and/or quantity of the offer (specified in the corresponding &lt;strong&gt;offerId&lt;/strong&gt; field) or the attempt to update the total &#39;ship-to-home&#39; quantity of an inventory item (specified in the corresponding &lt;strong&gt;sku&lt;/strong&gt; field). For a completely successful update of an offer or inventory item record, a value of &lt;code&gt;200&lt;/code&gt; will appear in this field. For a partially successful call, a value of &lt;code&gt;207&lt;/code&gt; will appear in this field. A value of &lt;code&gt;204&lt;/code&gt; will appear in this field if the response payload has no content. | [optional] 
**sku** | **string** | This is the seller-defined SKU value of the product. This field is returned whether the seller attempted to update an offer with the SKU value or just attempted to update the total &#39;ship-to-home&#39; quantity of an inventory item record.&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;Max Length&lt;/strong&gt;: 50&lt;br/&gt; | [optional] 
**offer_id** | **string** | The unique identifier of the offer that was updated. This field will not be returned in situations where the seller is only updating the total &#39;ship-to-home&#39; quantity of an inventory item record. | [optional] 
**errors** | [**\Nopolabs\EBay\Sell\Inventory\Model\Error[]**](Error.md) | This container will be returned if there were one or more errors associated with the update to the offer or inventory item record. | [optional] 
**warnings** | [**\Nopolabs\EBay\Sell\Inventory\Model\Error[]**](Error.md) | This container will be returned if there were one or more warnings associated with the update to the offer or inventory item record. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


