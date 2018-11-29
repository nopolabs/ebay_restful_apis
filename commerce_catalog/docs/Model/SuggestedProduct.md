# SuggestedProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_image_urls** | **string[]** | A list of URLs for additional images associated with the suggested product. For the URL of the primary image, see the imageUrl field. | [optional] 
**aspects** | [**\Nopolabs\EBay\Commerce\Catalog\Model\ProductAspect[]**](ProductAspect.md) | Contains one or more category aspects and their values that are associated with the suggested product. | [optional] 
**brand** | **string** | The manufacturer&#39;s brand name for the suggested product. | [optional] 
**description** | **string** | A rich description of the suggested product, which can contain HTML, including the following basic tags: Text formatting tags such as &amp;lt;b&amp;gt;, &amp;lt;i&amp;gt;, &amp;lt;br&amp;gt;, &amp;lt;ol&amp;gt;, &amp;lt;ul&amp;gt;, and &amp;lt;li&amp;gt; Table formatting tags such as &amp;lt;table&amp;gt;, &amp;lt;tr&amp;gt;, &amp;lt;td&amp;gt;, &amp;lt;th&amp;gt;, &amp;lt;thead&amp;gt;, &amp;lt;tfoot&amp;gt;, &amp;lt;tbody&amp;gt;, &amp;lt;caption&amp;gt;, &amp;lt;col&amp;gt;, and &amp;lt;colgroup&amp;gt; Note: Active content from sellers is prohibited on eBay, including animation or video via JavaScript, Flash, plug-ins, or form actions. | [optional] 
**ean** | **string[]** | A list of all European Article Numbers (EANs) that identify the suggested product. | [optional] 
**epid** | **string** | Required or returned only if the value of the changeRequestType field is PRODUCT_UPDATE. This is the eBay product ID of the product record for which an update is being suggested. | [optional] 
**image_url** | **string** | Required or returned if the value of the changeRequestType field is PRODUCT_CREATION. This is the URL of the primary image associated with the suggested product. | [optional] 
**isbn** | **string[]** | A list of all International Standard Book Numbers (ISBNs) that identify the suggested product. | [optional] 
**mpn** | **string[]** | A list of all Manufacturer Product Number (MPN) values that the manufacturer uses to identify the suggested product. | [optional] 
**other_applicable_category_ids** | **string[]** | A list of category IDs (other than the value of primaryCategoryId) for all the leaf categories to which the suggested product might belong. | [optional] 
**primary_category_id** | **string** | The identifier of the category that eBay recommends using to list the suggested product, based on previous listings of similar products. Products in the eBay catalog are not automatically associated with any particular category, but using an inappropriate category can make it difficult for prospective buyers to find the product. For other possible categories that might be used, see otherApplicableCategoryIds. | [optional] 
**title** | **string** | The catalog title that will be used as the listing title for all item listings based on the suggested product. | [optional] 
**upc** | **string[]** | A list of all Universal Product Codes (UPCs) that identify the suggested product. | [optional] 
**version** | **string** | Required or returned only if the value of changeRequestType is PRODUCT_UPDATE. This is the current version number in the catalog of the product record for which an update is being suggested. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


