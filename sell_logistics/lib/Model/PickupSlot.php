<?php
/**
 * PickupSlot
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Logistics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Logistics API
 *
 * The Logistics API resources offer the following capabilities: shipping_quote &ndash; Consolidates into a list a set of live shipping rates, or quotes, from which you can select a rate to ship a package. shipment &ndash; Creates a &quot;shipment&quot; for the selected shipping rate. Call createShippingQuote to get a list of live shipping rates. The rates returned are all valid for a specific time window and all quoted prices are at eBay-negotiated rates. Select one of the live rates and using its associated rateId, create a &quot;shipment&quot; for the package by calling createFromShippingQuote. Creating a shipment completes an agreement, and the base service and addition shipping options are totaled into the totalShippingCost. This action also generates a shipping label that you can use to ship the package. Important! Sellers must set up a payment method via their eBay account before they can use the methods in this API to create a shipment and the associated shipping label.
 *
 * OpenAPI spec version: v1_beta.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Logistics\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Sell\Logistics\ObjectSerializer;

/**
 * PickupSlot Class Doc Comment
 *
 * @category Class
 * @description This complex type defines a time window for the pickup of a package.
 * @package  Nopolabs\EBay\Sell\Logistics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PickupSlot implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PickupSlot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pickup_slot_end_time' => 'string',
        'pickup_slot_id' => 'string',
        'pickup_slot_start_time' => 'string',
        'pickup_slot_time_zone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pickup_slot_end_time' => null,
        'pickup_slot_id' => null,
        'pickup_slot_start_time' => null,
        'pickup_slot_time_zone' => null
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
        'pickup_slot_end_time' => 'pickupSlotEndTime',
        'pickup_slot_id' => 'pickupSlotId',
        'pickup_slot_start_time' => 'pickupSlotStartTime',
        'pickup_slot_time_zone' => 'pickupSlotTimeZone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_slot_end_time' => 'setPickupSlotEndTime',
        'pickup_slot_id' => 'setPickupSlotId',
        'pickup_slot_start_time' => 'setPickupSlotStartTime',
        'pickup_slot_time_zone' => 'setPickupSlotTimeZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_slot_end_time' => 'getPickupSlotEndTime',
        'pickup_slot_id' => 'getPickupSlotId',
        'pickup_slot_start_time' => 'getPickupSlotStartTime',
        'pickup_slot_time_zone' => 'getPickupSlotTimeZone'
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
        $this->container['pickup_slot_end_time'] = isset($data['pickup_slot_end_time']) ? $data['pickup_slot_end_time'] : null;
        $this->container['pickup_slot_id'] = isset($data['pickup_slot_id']) ? $data['pickup_slot_id'] : null;
        $this->container['pickup_slot_start_time'] = isset($data['pickup_slot_start_time']) ? $data['pickup_slot_start_time'] : null;
        $this->container['pickup_slot_time_zone'] = isset($data['pickup_slot_time_zone']) ? $data['pickup_slot_time_zone'] : null;
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
     * Gets pickup_slot_end_time
     *
     * @return string
     */
    public function getPickupSlotEndTime()
    {
        return $this->container['pickup_slot_end_time'];
    }

    /**
     * Sets pickup_slot_end_time
     *
     * @param string $pickup_slot_end_time The date and time the pickup slot ends, formatted as an ISO 8601 UTC string.
     *
     * @return $this
     */
    public function setPickupSlotEndTime($pickup_slot_end_time)
    {
        $this->container['pickup_slot_end_time'] = $pickup_slot_end_time;

        return $this;
    }

    /**
     * Gets pickup_slot_id
     *
     * @return string
     */
    public function getPickupSlotId()
    {
        return $this->container['pickup_slot_id'];
    }

    /**
     * Sets pickup_slot_id
     *
     * @param string $pickup_slot_id Seller-defined name for the pickup slot.
     *
     * @return $this
     */
    public function setPickupSlotId($pickup_slot_id)
    {
        $this->container['pickup_slot_id'] = $pickup_slot_id;

        return $this;
    }

    /**
     * Gets pickup_slot_start_time
     *
     * @return string
     */
    public function getPickupSlotStartTime()
    {
        return $this->container['pickup_slot_start_time'];
    }

    /**
     * Sets pickup_slot_start_time
     *
     * @param string $pickup_slot_start_time The date and time the pickup slot begins, formatted as an ISO 8601 UTC string.
     *
     * @return $this
     */
    public function setPickupSlotStartTime($pickup_slot_start_time)
    {
        $this->container['pickup_slot_start_time'] = $pickup_slot_start_time;

        return $this;
    }

    /**
     * Gets pickup_slot_time_zone
     *
     * @return string
     */
    public function getPickupSlotTimeZone()
    {
        return $this->container['pickup_slot_time_zone'];
    }

    /**
     * Sets pickup_slot_time_zone
     *
     * @param string $pickup_slot_time_zone The time zone of the pickup location, returned as Time Zone Database ID (also know as an Olson time zone ID).
     *
     * @return $this
     */
    public function setPickupSlotTimeZone($pickup_slot_time_zone)
    {
        $this->container['pickup_slot_time_zone'] = $pickup_slot_time_zone;

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


