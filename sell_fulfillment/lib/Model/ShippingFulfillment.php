<?php
/**
 * ShippingFulfillment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Fulfillment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * OpenAPI spec version: v1.6.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Fulfillment\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Sell\Fulfillment\ObjectSerializer;

/**
 * ShippingFulfillment Class Doc Comment
 *
 * @category Class
 * @description This type contains the complete details of an existing fulfillment for an order.
 * @package  Nopolabs\EBay\Sell\Fulfillment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingFulfillment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingFulfillment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fulfillment_id' => 'string',
        'line_items' => '\Nopolabs\EBay\Sell\Fulfillment\Model\LineItemReference[]',
        'shipment_tracking_number' => 'string',
        'shipped_date' => 'string',
        'shipping_carrier_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fulfillment_id' => null,
        'line_items' => null,
        'shipment_tracking_number' => null,
        'shipped_date' => null,
        'shipping_carrier_code' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fulfillment_id' => 'fulfillmentId',
        'line_items' => 'lineItems',
        'shipment_tracking_number' => 'shipmentTrackingNumber',
        'shipped_date' => 'shippedDate',
        'shipping_carrier_code' => 'shippingCarrierCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_id' => 'setFulfillmentId',
        'line_items' => 'setLineItems',
        'shipment_tracking_number' => 'setShipmentTrackingNumber',
        'shipped_date' => 'setShippedDate',
        'shipping_carrier_code' => 'setShippingCarrierCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_id' => 'getFulfillmentId',
        'line_items' => 'getLineItems',
        'shipment_tracking_number' => 'getShipmentTrackingNumber',
        'shipped_date' => 'getShippedDate',
        'shipping_carrier_code' => 'getShippingCarrierCode'
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
        return self::$swaggerModelName;
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
        $this->container['fulfillment_id'] = isset($data['fulfillment_id']) ? $data['fulfillment_id'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['shipment_tracking_number'] = isset($data['shipment_tracking_number']) ? $data['shipment_tracking_number'] : null;
        $this->container['shipped_date'] = isset($data['shipped_date']) ? $data['shipped_date'] : null;
        $this->container['shipping_carrier_code'] = isset($data['shipping_carrier_code']) ? $data['shipping_carrier_code'] : null;
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

        return true;
    }


    /**
     * Gets fulfillment_id
     *
     * @return string
     */
    public function getFulfillmentId()
    {
        return $this->container['fulfillment_id'];
    }

    /**
     * Sets fulfillment_id
     *
     * @param string $fulfillment_id The unique identifier of the fulfillment; for example, 9405509699937003457459. This eBay-generated value is created with a successful createShippingFulfillment call.
     *
     * @return $this
     */
    public function setFulfillmentId($fulfillment_id)
    {
        $this->container['fulfillment_id'] = $fulfillment_id;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Nopolabs\EBay\Sell\Fulfillment\Model\LineItemReference[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Nopolabs\EBay\Sell\Fulfillment\Model\LineItemReference[] $line_items This array contains a list of one or more line items (and purchased quantity) to which the fulfillment applies.
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets shipment_tracking_number
     *
     * @return string
     */
    public function getShipmentTrackingNumber()
    {
        return $this->container['shipment_tracking_number'];
    }

    /**
     * Sets shipment_tracking_number
     *
     * @param string $shipment_tracking_number The tracking number provided by the shipping carrier for the package shipped in this fulfillment. This field is returned if available.
     *
     * @return $this
     */
    public function setShipmentTrackingNumber($shipment_tracking_number)
    {
        $this->container['shipment_tracking_number'] = $shipment_tracking_number;

        return $this;
    }

    /**
     * Gets shipped_date
     *
     * @return string
     */
    public function getShippedDate()
    {
        return $this->container['shipped_date'];
    }

    /**
     * Sets shipped_date
     *
     * @param string $shipped_date The date and time that the fulfillment package was shipped. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field should only be returned if the package has been shipped. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2015-08-04T19:09:02.768Z
     *
     * @return $this
     */
    public function setShippedDate($shipped_date)
    {
        $this->container['shipped_date'] = $shipped_date;

        return $this;
    }

    /**
     * Gets shipping_carrier_code
     *
     * @return string
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shipping_carrier_code'];
    }

    /**
     * Sets shipping_carrier_code
     *
     * @param string $shipping_carrier_code The eBay code identifying the shipping carrier for this fulfillment. This field is returned if available. Note: The Trading API's ShippingCarrierCodeType enumeration type contains the most current list of eBay shipping carrier codes and the countries served by each carrier. See ShippingCarrierCodeType.
     *
     * @return $this
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

