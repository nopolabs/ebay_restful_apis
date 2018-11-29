# ProcessResolution

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conflicting_products** | [**\Nopolabs\EBay\Commerce\Catalog\Model\ConflictingProduct[]**](ConflictingProduct.md) | Contains information about one or more existing products with identifying information that matches or instersects with the suggested product. For each conflicting product, the difference is in the presence or value of one or more product aspects. If the seller accepts the aspects and their values of the conflicting product (such as a color value of scarlet instead of crimson), that product can be adopted by the seller instead of the suggested product. If the seller does not accept any of the conflicting products as is, you can submit a change request to update one of them, or to create a new product for which identifying information doesn&#39;t overlap with an existing product enough to produce a conflict. | [optional] 
**corrections** | [**\Nopolabs\EBay\Commerce\Catalog\Model\Correction[]**](Correction.md) | Contains information about one or more corrections to this change request that eBay has applied to the new or updated product. Sellers can accept these corrections by adopting the product, which is identified by the epid field. | [optional] 
**epid** | **string** | Returned only if the value of changeRequestStatus is APPROVED or APPROVED_WITH_MODIFICATIONS; this is the eBay identifier of the resulting product. | [optional] 
**product_href** | **string** | The URI of the getProduct call request that retrieves this product&#39;s details. This field is returned under one of the following conditions: The value of changeRequestType is PRODUCT_UPDATE. The value of changeRequestType is PRODUCT_CREATION, and the value of changeRequestStatus is APPROVED or APPROVED_WITH_MODIFICATIONS. | [optional] 
**violations** | [**\Nopolabs\EBay\Commerce\Catalog\Model\Violation[]**](Violation.md) | Contains information about one or more violations in the values of the suggested product&#39;s aspects or fixed attributes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


