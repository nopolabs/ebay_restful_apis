# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_images** | [**\Nopolabs\EBay\Commerce\Catalog\Model\Image[]**](Image.md) | Contains information about additional images associated with this product. For the primary image, see the image container. | [optional] 
**aspects** | [**\Nopolabs\EBay\Commerce\Catalog\Model\Aspect[]**](Aspect.md) | Contains an array of the category aspects and their values that are associated with this product. | [optional] 
**brand** | **string** | The manufacturer&#39;s brand name for this product. | [optional] 
**description** | **string** | The rich description of this product, which might contain HTML. | [optional] 
**ean** | **string[]** | A list of all European Article Numbers (EANs) that identify this product. | [optional] 
**epid** | **string** | The eBay product ID of this product. | [optional] 
**gtin** | **string[]** | A list of all GTINs that identify this product. Currently this can include EAN, ISBN, and UPC identifier types. | [optional] 
**image** | [**\Nopolabs\EBay\Commerce\Catalog\Model\Image**](Image.md) |  | [optional] 
**isbn** | **string[]** | A list of all International Standard Book Numbers (ISBNs) that identify this product. | [optional] 
**mpn** | **string[]** | A list of all MPN values that the manufacturer uses to identify this product. | [optional] 
**other_applicable_category_ids** | **string[]** | A list of category IDs (other than the value of primaryCategoryId) for all the leaf categories to which this product might belong. | [optional] 
**primary_category_id** | **string** | The identifier of the leaf category that eBay recommends using to list this product, based on previous listings of similar products. Products in the eBay catalog are not automatically associated with any particular category, but using an inappropriate category can make it difficult for prospective buyers to find the product. For other possible categories that might be used, see otherApplicableCategoryIds. | [optional] 
**product_web_url** | **string** | The URL for this product&#39;s eBay product page. | [optional] 
**title** | **string** | The title of this product on eBay. | [optional] 
**upc** | **string[]** | A list of Universal Product Codes (UPCs) that identify this product. | [optional] 
**version** | **string** | The current version number of this product record in the catalog. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


