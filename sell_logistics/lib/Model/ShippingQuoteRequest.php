<?php
/**
 * ShippingQuoteRequest
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
 * ShippingQuoteRequest Class Doc Comment
 *
 * @category Class
 * @description This complex type defines the request body for &lt;b&gt;createShippingQuote&lt;/b&gt;. Sellers &lt;i&gt;request a quote&lt;/i&gt; for a shipment by defining the \&quot;To\&quot; and \&quot;From\&quot; addresses for the package, plus the package&#39;s size.  &lt;br&gt;&lt;br&gt;Carriers respond by offering up a \&quot;rate\&quot; for the service of theirs that best fits seller&#39;s needs.
 * @package  Nopolabs\EBay\Sell\Logistics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingQuoteRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingQuoteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'orders' => '\Nopolabs\EBay\Sell\Logistics\Model\Order[]',
        'package_specification' => '\Nopolabs\EBay\Sell\Logistics\Model\PackageSpecification',
        'ship_from' => '\Nopolabs\EBay\Sell\Logistics\Model\Contact',
        'ship_to' => '\Nopolabs\EBay\Sell\Logistics\Model\Contact'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'orders' => null,
        'package_specification' => null,
        'ship_from' => null,
        'ship_to' => null
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
        'orders' => 'orders',
        'package_specification' => 'packageSpecification',
        'ship_from' => 'shipFrom',
        'ship_to' => 'shipTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orders' => 'setOrders',
        'package_specification' => 'setPackageSpecification',
        'ship_from' => 'setShipFrom',
        'ship_to' => 'setShipTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orders' => 'getOrders',
        'package_specification' => 'getPackageSpecification',
        'ship_from' => 'getShipFrom',
        'ship_to' => 'getShipTo'
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
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['package_specification'] = isset($data['package_specification']) ? $data['package_specification'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
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
     * Gets orders
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\Order[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\Order[] $orders A seller-defined list that contains information about the orders in the package. This allows sellers to include information about the line items in the package with the shipment information. A package can contain any number of line items from one or more orders, providing they all ship in the same package. Maximum list size: 10
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets package_specification
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\PackageSpecification
     */
    public function getPackageSpecification()
    {
        return $this->container['package_specification'];
    }

    /**
     * Sets package_specification
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\PackageSpecification $package_specification package_specification
     *
     * @return $this
     */
    public function setPackageSpecification($package_specification)
    {
        $this->container['package_specification'] = $package_specification;

        return $this;
    }

    /**
     * Gets ship_from
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\Contact
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\Contact $ship_from ship_from
     *
     * @return $this
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\Contact
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\Contact $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

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

