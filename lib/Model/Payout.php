<?php
/**
 * Payout
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell\Finances
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eBay Finances API
 *
 * This API is used to retrieve seller payouts and monetary transaction details related to those payouts.
 *
 * The version of the OpenAPI document: 1.9.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Finances\Model;

use \ArrayAccess;
use \Ebay\Sell\Finances\ObjectSerializer;

/**
 * Payout Class Doc Comment
 *
 * @category Class
 * @description This type is used to express the details of one seller payout that is returned with the &lt;strong&gt;getPayout&lt;/strong&gt; or &lt;strong&gt;getPayouts&lt;/strong&gt; methods.
 * @package  Ebay\Sell\Finances
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Payout implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\Ebay\Sell\Finances\Model\Amount',
        'bank_reference' => 'string',
        'last_attempted_payout_date' => 'string',
        'payout_date' => 'string',
        'payout_id' => 'string',
        'payout_memo' => 'string',
        'payout_instrument' => '\Ebay\Sell\Finances\Model\PayoutInstrument',
        'payout_status' => 'string',
        'payout_status_description' => 'string',
        'transaction_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'bank_reference' => null,
        'last_attempted_payout_date' => null,
        'payout_date' => null,
        'payout_id' => null,
        'payout_memo' => null,
        'payout_instrument' => null,
        'payout_status' => null,
        'payout_status_description' => null,
        'transaction_count' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'bank_reference' => 'bankReference',
        'last_attempted_payout_date' => 'lastAttemptedPayoutDate',
        'payout_date' => 'payoutDate',
        'payout_id' => 'payoutId',
        'payout_memo' => 'payoutMemo',
        'payout_instrument' => 'payoutInstrument',
        'payout_status' => 'payoutStatus',
        'payout_status_description' => 'payoutStatusDescription',
        'transaction_count' => 'transactionCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'bank_reference' => 'setBankReference',
        'last_attempted_payout_date' => 'setLastAttemptedPayoutDate',
        'payout_date' => 'setPayoutDate',
        'payout_id' => 'setPayoutId',
        'payout_memo' => 'setPayoutMemo',
        'payout_instrument' => 'setPayoutInstrument',
        'payout_status' => 'setPayoutStatus',
        'payout_status_description' => 'setPayoutStatusDescription',
        'transaction_count' => 'setTransactionCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'bank_reference' => 'getBankReference',
        'last_attempted_payout_date' => 'getLastAttemptedPayoutDate',
        'payout_date' => 'getPayoutDate',
        'payout_id' => 'getPayoutId',
        'payout_memo' => 'getPayoutMemo',
        'payout_instrument' => 'getPayoutInstrument',
        'payout_status' => 'getPayoutStatus',
        'payout_status_description' => 'getPayoutStatusDescription',
        'transaction_count' => 'getTransactionCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['bank_reference'] = isset($data['bank_reference']) ? $data['bank_reference'] : null;
        $this->container['last_attempted_payout_date'] = isset($data['last_attempted_payout_date']) ? $data['last_attempted_payout_date'] : null;
        $this->container['payout_date'] = isset($data['payout_date']) ? $data['payout_date'] : null;
        $this->container['payout_id'] = isset($data['payout_id']) ? $data['payout_id'] : null;
        $this->container['payout_memo'] = isset($data['payout_memo']) ? $data['payout_memo'] : null;
        $this->container['payout_instrument'] = isset($data['payout_instrument']) ? $data['payout_instrument'] : null;
        $this->container['payout_status'] = isset($data['payout_status']) ? $data['payout_status'] : null;
        $this->container['payout_status_description'] = isset($data['payout_status_description']) ? $data['payout_status_description'] : null;
        $this->container['transaction_count'] = isset($data['transaction_count']) ? $data['transaction_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amount
     *
     * @return \Ebay\Sell\Finances\Model\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Ebay\Sell\Finances\Model\Amount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets bank_reference
     *
     * @return string|null
     */
    public function getBankReference()
    {
        return $this->container['bank_reference'];
    }

    /**
     * Sets bank_reference
     *
     * @param string|null $bank_reference This field contains additional information provided by the bank and passed on by the payment processor; e.g., the manner in which the transaction will appear on the seller's bank statement. The field is returned only when provided by the bank and processor.
     *
     * @return self
     */
    public function setBankReference($bank_reference)
    {
        $this->container['bank_reference'] = $bank_reference;

        return $this;
    }

    /**
     * Gets last_attempted_payout_date
     *
     * @return string|null
     */
    public function getLastAttemptedPayoutDate()
    {
        return $this->container['last_attempted_payout_date'];
    }

    /**
     * Sets last_attempted_payout_date
     *
     * @param string|null $last_attempted_payout_date This timestamp indicates the date/time when eBay last attempted to process a seller payout but it failed. This field is only returned if a seller payout fails, and the payoutStatus value shows RETRYABLE_FAILED or TERMINAL_FAILED. A seller can filter on the lastAttemptedPayoutDate in a getPayouts request.
     *
     * @return self
     */
    public function setLastAttemptedPayoutDate($last_attempted_payout_date)
    {
        $this->container['last_attempted_payout_date'] = $last_attempted_payout_date;

        return $this;
    }

    /**
     * Gets payout_date
     *
     * @return string|null
     */
    public function getPayoutDate()
    {
        return $this->container['payout_date'];
    }

    /**
     * Sets payout_date
     *
     * @param string|null $payout_date This timestamp indicates when the seller payout began processing. The following format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2015-08-04T19:09:02.768Z. This field is still returned even if the payout was pending but failed (payoutStatus value shows RETRYABLE_FAILED or TERMINAL_FAILED).
     *
     * @return self
     */
    public function setPayoutDate($payout_date)
    {
        $this->container['payout_date'] = $payout_date;

        return $this;
    }

    /**
     * Gets payout_id
     *
     * @return string|null
     */
    public function getPayoutId()
    {
        return $this->container['payout_id'];
    }

    /**
     * Sets payout_id
     *
     * @param string|null $payout_id The unique identifier of the seller payout. This identifier is generated once eBay begins processing the payout to the seller's bank account.
     *
     * @return self
     */
    public function setPayoutId($payout_id)
    {
        $this->container['payout_id'] = $payout_id;

        return $this;
    }

    /**
     * Gets payout_memo
     *
     * @return string|null
     */
    public function getPayoutMemo()
    {
        return $this->container['payout_memo'];
    }

    /**
     * Sets payout_memo
     *
     * @param string|null $payout_memo This field contains information provided by upstream components, based on internal and external commitments. A typical message would contain the expected arrival time of the payout.
     *
     * @return self
     */
    public function setPayoutMemo($payout_memo)
    {
        $this->container['payout_memo'] = $payout_memo;

        return $this;
    }

    /**
     * Gets payout_instrument
     *
     * @return \Ebay\Sell\Finances\Model\PayoutInstrument|null
     */
    public function getPayoutInstrument()
    {
        return $this->container['payout_instrument'];
    }

    /**
     * Sets payout_instrument
     *
     * @param \Ebay\Sell\Finances\Model\PayoutInstrument|null $payout_instrument payout_instrument
     *
     * @return self
     */
    public function setPayoutInstrument($payout_instrument)
    {
        $this->container['payout_instrument'] = $payout_instrument;

        return $this;
    }

    /**
     * Gets payout_status
     *
     * @return string|null
     */
    public function getPayoutStatus()
    {
        return $this->container['payout_status'];
    }

    /**
     * Sets payout_status
     *
     * @param string|null $payout_status This enumeration value indicates the current status of the seller payout. For a successful payout, the value returned will be SUCCEEDED. See the PayoutStatusEnum type for more details on each payout status value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:PayoutStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPayoutStatus($payout_status)
    {
        $this->container['payout_status'] = $payout_status;

        return $this;
    }

    /**
     * Gets payout_status_description
     *
     * @return string|null
     */
    public function getPayoutStatusDescription()
    {
        return $this->container['payout_status_description'];
    }

    /**
     * Sets payout_status_description
     *
     * @param string|null $payout_status_description This field provides more details about the current status of payout. The description returned here will correspond with enumeration value returned in the payoutStatus field. The following shows what description text might appear based on the different payoutStatus values: INITIATED: Preparing to send SUCCEEDED: Funds sent REVERSED: Waiting to retry : Money rejected by seller's bank RETRYABLE_FAILED: Waiting to retry TERMINAL_FAILED: Payout failed
     *
     * @return self
     */
    public function setPayoutStatusDescription($payout_status_description)
    {
        $this->container['payout_status_description'] = $payout_status_description;

        return $this;
    }

    /**
     * Gets transaction_count
     *
     * @return int|null
     */
    public function getTransactionCount()
    {
        return $this->container['transaction_count'];
    }

    /**
     * Sets transaction_count
     *
     * @param int|null $transaction_count This integer value indicates the number of monetary transactions (all orders, refunds, and credits, etc.) that have occurred with the corresponding payout. Its value should always be at least 1, since there is at least one order per seller payout.
     *
     * @return self
     */
    public function setTransactionCount($transaction_count)
    {
        $this->container['transaction_count'] = $transaction_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


