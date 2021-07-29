# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\Ebay\Sell\Finances\Model\Amount**](Amount.md) |  | [optional]
**booking_entry** | **string** | The enumeration value returned in this field indicates if the monetary transaction amount is a (CREDIT) or a (DEBIT) to the seller&#39;s account. Typically, the SALE and CREDIT transaction types are credits to the seller&#39;s account, and the REFUND, DISPUTE, SHIPPING_LABEL, and TRANSFER transaction types are debits to the seller&#39;s account. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**buyer** | [**\Ebay\Sell\Finances\Model\Buyer**](Buyer.md) |  | [optional]
**fee_type** | **string** | The type of fee. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/finances/types/api:FeeTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**order_id** | **string** | The unique identifier of the eBay order associated with the monetary transaction. | [optional]
**order_line_items** | [**\Ebay\Sell\Finances\Model\OrderLineItem[]**](OrderLineItem.md) | This array shows the fees that are deducted from a seller payout for each line item in an order. | [optional]
**payments_entity** | **string** | This string value indicates the entity that is processing the payment. | [optional]
**payout_id** | **string** | The unique identifier of the seller payout associated with the monetary transaction. This identifier is generated once eBay begins processing the payout for the corresponding order. This field will not be returned if eBay has not yet begun processing the payout for an order. | [optional]
**references** | [**\Ebay\Sell\Finances\Model\Reference[]**](Reference.md) | This field contains reference information for the transaction fee. This includes an ID and the type of ID provided (such as item ID). | [optional]
**sales_record_reference** | **string** | The Sales Record Number associated with a sales order. Sales Record Numbers are Selling Manager/Selling Manager Pro identifiers that are created at order checkout. Note: For all orders originating after February 1, 2020, a value of 0 will be returned in this field. The Sales Record Number field has also been removed from Seller Hub. Instead of salesRecordReference, depend on orderId instead as the identifier of the order. The salesRecordReference field has been scheduled for deprecation, and a date for when this field will no longer be returned at all will be announced soon. | [optional]
**total_fee_basis_amount** | [**\Ebay\Sell\Finances\Model\Amount**](Amount.md) |  | [optional]
**total_fee_amount** | [**\Ebay\Sell\Finances\Model\Amount**](Amount.md) |  | [optional]
**transaction_date** | **string** | This timestamp indicates when the monetary transaction (order purchase, buyer refund, seller credit) occurred. The following (UTC) format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2015-08-04T19:09:02.768Z. | [optional]
**transaction_id** | **string** | The unique identifier of the monetary transaction. A monetary transaction can be a sales order, an order refund to the buyer, a credit to the seller&#39;s account, a debit to the seller for the purchase of a shipping label, or a transaction where eBay recouped money from the seller if the seller lost a buyer-initiated payment dispute. | [optional]
**transaction_memo** | **string** | This field provides more details on shipping label transactions and transactions where the funds are being held by eBay. For shipping label transactions, the transactionMemo gives details about a purchase, a refund, or a price adjustment to the cost of the shipping label. For on-hold transactions, the transactionMemo provides information on the reason for the hold or when the hold will be released (e.g., &amp;quot;Funds on hold. Estimated release on Jun 1&amp;quot;). This field is only returned if applicable/available. | [optional]
**transaction_status** | **string** | This enumeration value indicates the current status of the seller payout associated with the monetary transaction. See the TransactionStatusEnum type for more information on the different states. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**transaction_type** | **string** | This enumeration value indicates whether the monetary transaction is a buyer&#39;s payment for an order, a refund to the buyer for a returned item or cancelled order, a credit issued by eBay to the seller&#39;s account, a payment dispute between the buyer and seller, or where eBay is billing the seller for an eBay shipping label or another charge (such as a refund to a buyer). Note that the shipping label functionality will initially only be available to a select number of sellers. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)