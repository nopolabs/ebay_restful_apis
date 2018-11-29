# SelectionRule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brands** | **string[]** | A list of the brands of the items to be included in the campaign. | [optional] 
**category_ids** | **string[]** | A list of category IDs associated with the listings to be included in the campaign. All the seller&#39;s items listed in the specified categories are included in the campaign, up to a maximum of 25,000 items. The IDs can be either a list of eBay category IDs (from the site where the item is hosted), or a list of category IDs defined and used by the seller&#39;s store. eBay Marketplace category IDs To get a list of marketplace category IDs, do one of the following: Get a list of category IDs for a marketplace by adding /sch/allcategories/all-categories to the marketplace URL when browsing the site. For example: http://www.ebay.com.au/sch/allcategories/all-categories Navigate to the desired category on the host site and copy the category ID from the URL. These options are also available for the US marketplace: See Category Changes for the latest list of category IDs. Retrieve a list of category IDs using the Taxonomy API. Seller store category IDs Because store category IDs are uniquely defined and maintained by each seller, this service cannot provide a list of a seller&#39;s IDs. However, sellers can retrieve their store category IDs as follows: Go to Seller Hub &amp;gt; Marketing. Click Manage store categories. A list of your store categories displays. Click the All categories link displayed at the bottom of the list. A complete list of your store categories and their associated store category IDs displays. | [optional] 
**category_scope** | **string** | Indicates the source of the category ID; eBay or seller&#39;s store. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/marketing/types/CategoryScopeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**listing_condition_ids** | **string[]** | The ID of the listing&#39;s condition. Valid values: 1000 &#x3D; New 2000 &#x3D; Manufacturer refurbished 2500 &#x3D; Seller refurbished 2750 &#x3D; &amp;quot;Like new&amp;quot;, used Specific to media categories (books, DVDs, CDs) 3000 &#x3D; Used | [optional] 
**max_price** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 
**min_price** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


