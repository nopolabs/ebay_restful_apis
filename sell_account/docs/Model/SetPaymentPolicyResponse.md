# SetPaymentPolicyResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_types** | [**\Nopolabs\EBay\Sell\Account\Model\CategoryType[]**](CategoryType.md) | The CategoryTypeEnum value to which this policy applies. Used to discern accounts that sell motor vehicles from those that don&#39;t. (Currently, each policy can be set to only one categoryTypes value at a time.) | [optional] 
**deposit** | [**\Nopolabs\EBay\Sell\Account\Model\Deposit**](Deposit.md) |  | [optional] 
**description** | **string** | An optional seller-defined description of the payment policy for internal use (this value is not displayed to end users). | [optional] 
**full_payment_due_in** | [**\Nopolabs\EBay\Sell\Account\Model\TimeDuration**](TimeDuration.md) |  | [optional] 
**immediate_pay** | **bool** | If set to true, payment is due upon receipt (eBay generates a receipt when the buyer agrees to purchase an item). Your items will be available for other buyers until payment is complete. This boolean must be set in the payment policy if the seller wants to create a listing that has an &amp;quot;immediate payment&amp;quot; requirement. Default: false | [optional] 
**marketplace_id** | **string** | The ID of the eBay marketplace to which this payment policy applies. If this value is not specified, value defaults to the seller&#39;s eBay registration site. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/account/types/MarketplaceIdEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**name** | **string** | A user-defined name for this payment policy. Names must be unique for policies assigned to the same marketplace. Max length: 64 | [optional] 
**payment_instructions** | **string** | This user-defined field allows the seller to give payment instructions to the buyer. These instructions appear on the eBay View Item and Checkout pages. eBay recommends the seller use this field to clarify payment policies for motor vehicles (eBay Motors US and CA). For example, sellers can include the specifics on the deposit (if required), pickup/delivery arrangements, and full payment details on the vehicle. Max length: 500 | [optional] 
**payment_methods** | [**\Nopolabs\EBay\Sell\Account\Model\PaymentMethod[]**](PaymentMethod.md) | A list of the payment methods accepted by the seller. Each payment policy must specify at least one payment method. Payment policies used with motor vehicle listings that require a deposit must have PayPal listed has a payment method (deposits require PayPal as the payment method). Also, in order for a buyer to make a full payment on a US or CA motor vehicle, the payment policy must specify at least one of the following as a payment method: CashOnPickup LoanCheck MOCC (money order or cashier&#39;s check) PaymentSeeDescription (payment instructions are in the paymentInstructions field) PersonalCheck | [optional] 
**payment_policy_id** | **string** | A unique eBay-assigned ID for a payment policy. This ID is generated when the policy is created. | [optional] 
**warnings** | [**\Nopolabs\EBay\Sell\Account\Model\Error[]**](Error.md) | A list of warnings related to request. This field normally returns empty, which indicates the request did not generate any warnings. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


