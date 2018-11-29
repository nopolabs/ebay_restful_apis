# PromotionReportDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**average_item_discount** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 
**average_item_revenue** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 
**average_order_discount** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 
**average_order_revenue** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 
**average_order_size** | **string** | The average order size is the average number of items that each order contained in a promotion. This value is calculated as follows: itemsSoldQuantity / numberOfOrdersSold &#x3D; averageOrderSize | [optional] 
**base_sale** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 
**items_sold_quantity** | **int** | This is the quantity of items purchased in a threshold promotion where the threshold has been met and the discount was applied. For example, suppose you&#39;re running a &amp;quot;Buy 1, get 1 at 50%&amp;quot; promotion on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your number of items sold (itemsSoldQuantity) would be 2 and you number of orders sold (numberOfOrdersSold) would be 1. | [optional] 
**number_of_orders_sold** | **int** | This is the number of orders sold in a threshold promotion where the threshold has been met and the discount was applied. For example, suppose you&#39;re running a &amp;quot;Buy 1, get 1 at 50%&amp;quot; promotion on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your numberOfOrdersSold would be 1 and your itemsSoldQuantity would be 2. | [optional] 
**percentage_sales_lift** | **string** | The percentage sales lift is the total dollar amount gained due to promotions. This value is calculated as follows: promotionSale / totalSale &#x3D; percentageSalesLift | [optional] 
**promotion_href** | **string** | The URI of the promotion report. | [optional] 
**promotion_id** | **string** | A unique eBay-assigned ID for the promotion that&#39;s generated when the promotion is created. | [optional] 
**promotion_report_id** | **string** | The unique eBay-assigned ID of the promotion report that is generated when the report is created. | [optional] 
**promotion_sale** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 
**total_discount** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 
**total_sale** | [**\Nopolabs\EBay\Sell\Marketing\Model\Amount**](Amount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


