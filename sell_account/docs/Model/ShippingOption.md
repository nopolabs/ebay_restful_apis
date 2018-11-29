# ShippingOption

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost_type** | **string** | Required if the policy offers shipping options using a shippingOptions container. Defines whether the shipping cost is FLAT_RATE, CALCULATED, or NOT_SPECIFIED (for use with freight shipping and local pickup). For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/account/types/ShippingCostTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**insurance_fee** | [**\Nopolabs\EBay\Sell\Account\Model\Amount**](Amount.md) |  | [optional] 
**insurance_offered** | **bool** | If set to true, the seller offers buyer-paid shipping insurance. The optionType shows whether this is for either a domestic or international shipment. Buyer-paid shipping insurance is currently supported in only Australia (AU), France (FR), and Italy (IT). | [optional] 
**option_type** | **string** | Required if the policy offers shipping options using a shippingOptions container. Use this field to set the ShippingOption element to either DOMESTIC or INTERNATIONAL. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/account/types/ShippingOptionTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**package_handling_cost** | [**\Nopolabs\EBay\Sell\Account\Model\Amount**](Amount.md) |  | [optional] 
**rate_table_id** | **string** | A unique eBay-assigned ID associated with a user-created shipping rate table. The locality of a shipping rate table can be either DOMESTIC or INTERNATIONAL and you must ensure the value specified in this field references a shipping rate table that matches the type specified in the shippingOptions.optionType field. If you mismatch the types, eBay responds with a 20403 error. Call getRateTable to retrieve information (including rateTableId values) on the rate tables configured by a seller. For information on creating rate tables, see Using shipping rate tables. | [optional] 
**shipping_services** | [**\Nopolabs\EBay\Sell\Account\Model\ShippingService[]**](ShippingService.md) | Required if the policy offers shipping options using a shippingOptions container. Contains a list of shipping services offered for either DOMESTIC or INTERNATIONAL shipments. Sellers can specify up to four domestic shipping services and up to five international shipping services by using separate shippingService containers for each. Note that if the seller is opted in to the Global Shipping Program, they can specify only four other international shipping services, regardless of whether or not Global Shipping is offered as one of the services. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


