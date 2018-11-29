<?php
/**
 * Rate
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
 * Rate Class Doc Comment
 *
 * @category Class
 * @description This complex type contains live quote information about a shipping service that&#39;s available for a given shipping quote request, including the shipping carrier and service, delivery window, shipping cost, and additional shipping options.
 * @package  Nopolabs\EBay\Sell\Logistics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Rate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Rate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_options' => '\Nopolabs\EBay\Sell\Logistics\Model\AdditionalOption[]',
        'base_shipping_cost' => '\Nopolabs\EBay\Sell\Logistics\Model\Amount',
        'destination_time_zone' => 'string',
        'max_estimated_delivery_date' => 'string',
        'min_estimated_delivery_date' => 'string',
        'pickup_networks' => 'string[]',
        'pickup_slots' => '\Nopolabs\EBay\Sell\Logistics\Model\PickupSlot[]',
        'pickup_type' => 'string',
        'rate_id' => 'string',
        'rate_recommendation' => 'string[]',
        'shipping_carrier_code' => 'string',
        'shipping_carrier_name' => 'string',
        'shipping_service_code' => 'string',
        'shipping_service_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_options' => null,
        'base_shipping_cost' => null,
        'destination_time_zone' => null,
        'max_estimated_delivery_date' => null,
        'min_estimated_delivery_date' => null,
        'pickup_networks' => null,
        'pickup_slots' => null,
        'pickup_type' => null,
        'rate_id' => null,
        'rate_recommendation' => null,
        'shipping_carrier_code' => null,
        'shipping_carrier_name' => null,
        'shipping_service_code' => null,
        'shipping_service_name' => null
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
        'additional_options' => 'additionalOptions',
        'base_shipping_cost' => 'baseShippingCost',
        'destination_time_zone' => 'destinationTimeZone',
        'max_estimated_delivery_date' => 'maxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'minEstimatedDeliveryDate',
        'pickup_networks' => 'pickupNetworks',
        'pickup_slots' => 'pickupSlots',
        'pickup_type' => 'pickupType',
        'rate_id' => 'rateId',
        'rate_recommendation' => 'rateRecommendation',
        'shipping_carrier_code' => 'shippingCarrierCode',
        'shipping_carrier_name' => 'shippingCarrierName',
        'shipping_service_code' => 'shippingServiceCode',
        'shipping_service_name' => 'shippingServiceName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_options' => 'setAdditionalOptions',
        'base_shipping_cost' => 'setBaseShippingCost',
        'destination_time_zone' => 'setDestinationTimeZone',
        'max_estimated_delivery_date' => 'setMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'setMinEstimatedDeliveryDate',
        'pickup_networks' => 'setPickupNetworks',
        'pickup_slots' => 'setPickupSlots',
        'pickup_type' => 'setPickupType',
        'rate_id' => 'setRateId',
        'rate_recommendation' => 'setRateRecommendation',
        'shipping_carrier_code' => 'setShippingCarrierCode',
        'shipping_carrier_name' => 'setShippingCarrierName',
        'shipping_service_code' => 'setShippingServiceCode',
        'shipping_service_name' => 'setShippingServiceName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_options' => 'getAdditionalOptions',
        'base_shipping_cost' => 'getBaseShippingCost',
        'destination_time_zone' => 'getDestinationTimeZone',
        'max_estimated_delivery_date' => 'getMaxEstimatedDeliveryDate',
        'min_estimated_delivery_date' => 'getMinEstimatedDeliveryDate',
        'pickup_networks' => 'getPickupNetworks',
        'pickup_slots' => 'getPickupSlots',
        'pickup_type' => 'getPickupType',
        'rate_id' => 'getRateId',
        'rate_recommendation' => 'getRateRecommendation',
        'shipping_carrier_code' => 'getShippingCarrierCode',
        'shipping_carrier_name' => 'getShippingCarrierName',
        'shipping_service_code' => 'getShippingServiceCode',
        'shipping_service_name' => 'getShippingServiceName'
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
        $this->container['additional_options'] = isset($data['additional_options']) ? $data['additional_options'] : null;
        $this->container['base_shipping_cost'] = isset($data['base_shipping_cost']) ? $data['base_shipping_cost'] : null;
        $this->container['destination_time_zone'] = isset($data['destination_time_zone']) ? $data['destination_time_zone'] : null;
        $this->container['max_estimated_delivery_date'] = isset($data['max_estimated_delivery_date']) ? $data['max_estimated_delivery_date'] : null;
        $this->container['min_estimated_delivery_date'] = isset($data['min_estimated_delivery_date']) ? $data['min_estimated_delivery_date'] : null;
        $this->container['pickup_networks'] = isset($data['pickup_networks']) ? $data['pickup_networks'] : null;
        $this->container['pickup_slots'] = isset($data['pickup_slots']) ? $data['pickup_slots'] : null;
        $this->container['pickup_type'] = isset($data['pickup_type']) ? $data['pickup_type'] : null;
        $this->container['rate_id'] = isset($data['rate_id']) ? $data['rate_id'] : null;
        $this->container['rate_recommendation'] = isset($data['rate_recommendation']) ? $data['rate_recommendation'] : null;
        $this->container['shipping_carrier_code'] = isset($data['shipping_carrier_code']) ? $data['shipping_carrier_code'] : null;
        $this->container['shipping_carrier_name'] = isset($data['shipping_carrier_name']) ? $data['shipping_carrier_name'] : null;
        $this->container['shipping_service_code'] = isset($data['shipping_service_code']) ? $data['shipping_service_code'] : null;
        $this->container['shipping_service_name'] = isset($data['shipping_service_name']) ? $data['shipping_service_name'] : null;
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
     * Gets additional_options
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\AdditionalOption[]
     */
    public function getAdditionalOptions()
    {
        return $this->container['additional_options'];
    }

    /**
     * Sets additional_options
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\AdditionalOption[] $additional_options Contains service and pricing information for one or more shipping options that are offered by the carrier and can be purchased in addition to the base shipping service provided by this rate. Shipping options can include items such as INSURANCE and SIGNATURE.
     *
     * @return $this
     */
    public function setAdditionalOptions($additional_options)
    {
        $this->container['additional_options'] = $additional_options;

        return $this;
    }

    /**
     * Gets base_shipping_cost
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\Amount
     */
    public function getBaseShippingCost()
    {
        return $this->container['base_shipping_cost'];
    }

    /**
     * Sets base_shipping_cost
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\Amount $base_shipping_cost base_shipping_cost
     *
     * @return $this
     */
    public function setBaseShippingCost($base_shipping_cost)
    {
        $this->container['base_shipping_cost'] = $base_shipping_cost;

        return $this;
    }

    /**
     * Gets destination_time_zone
     *
     * @return string
     */
    public function getDestinationTimeZone()
    {
        return $this->container['destination_time_zone'];
    }

    /**
     * Sets destination_time_zone
     *
     * @param string $destination_time_zone The name of the time zone region, as defined in the IANA Time Zone Database, to which the package is being shipped. Delivery dates are calculated relative to this time zone. Note: This is different from a Coordinated Universal Time (UTC) offset. For example, the America/Los_Angeles time zone identifies a region with the UTC standard time offset of -08:00, but so do several other time zones, including America/Tijuana,America/Dawson, and Pacific/Pitcairn.
     *
     * @return $this
     */
    public function setDestinationTimeZone($destination_time_zone)
    {
        $this->container['destination_time_zone'] = $destination_time_zone;

        return $this;
    }

    /**
     * Gets max_estimated_delivery_date
     *
     * @return string
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['max_estimated_delivery_date'];
    }

    /**
     * Sets max_estimated_delivery_date
     *
     * @param string $max_estimated_delivery_date The latest stated date and time the shipment will be delivered at this rate. The time stamp is formatted as an ISO 8601 string, which is based on the 24-hour Universal Coordinated Time (UTC) clock. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2018-08-04T07:09:00.000Z
     *
     * @return $this
     */
    public function setMaxEstimatedDeliveryDate($max_estimated_delivery_date)
    {
        $this->container['max_estimated_delivery_date'] = $max_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets min_estimated_delivery_date
     *
     * @return string
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['min_estimated_delivery_date'];
    }

    /**
     * Sets min_estimated_delivery_date
     *
     * @param string $min_estimated_delivery_date The estimated earliest date and time the shipment will be delivered at this rate. The time stamp is formatted as an ISO 8601 UTC string. Format: YYYY-MM-DDTHH:MM:SS.SSSZ Example: 2018-08-06T01:00:00.000Z
     *
     * @return $this
     */
    public function setMinEstimatedDeliveryDate($min_estimated_delivery_date)
    {
        $this->container['min_estimated_delivery_date'] = $min_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets pickup_networks
     *
     * @return string[]
     */
    public function getPickupNetworks()
    {
        return $this->container['pickup_networks'];
    }

    /**
     * Sets pickup_networks
     *
     * @param string[] $pickup_networks A list of pickup networks compatible with the shipping service.
     *
     * @return $this
     */
    public function setPickupNetworks($pickup_networks)
    {
        $this->container['pickup_networks'] = $pickup_networks;

        return $this;
    }

    /**
     * Gets pickup_slots
     *
     * @return \Nopolabs\EBay\Sell\Logistics\Model\PickupSlot[]
     */
    public function getPickupSlots()
    {
        return $this->container['pickup_slots'];
    }

    /**
     * Sets pickup_slots
     *
     * @param \Nopolabs\EBay\Sell\Logistics\Model\PickupSlot[] $pickup_slots A list of available pickup slots for the package.
     *
     * @return $this
     */
    public function setPickupSlots($pickup_slots)
    {
        $this->container['pickup_slots'] = $pickup_slots;

        return $this;
    }

    /**
     * Gets pickup_type
     *
     * @return string
     */
    public function getPickupType()
    {
        return $this->container['pickup_type'];
    }

    /**
     * Sets pickup_type
     *
     * @param string $pickup_type The type of pickup or drop-off service associated with the pickupSlots time frames. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/logistics/types/PickupTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setPickupType($pickup_type)
    {
        $this->container['pickup_type'] = $pickup_type;

        return $this;
    }

    /**
     * Gets rate_id
     *
     * @return string
     */
    public function getRateId()
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id
     *
     * @param string $rate_id The unique eBay-assigned ID for this shipping rate.
     *
     * @return $this
     */
    public function setRateId($rate_id)
    {
        $this->container['rate_id'] = $rate_id;

        return $this;
    }

    /**
     * Gets rate_recommendation
     *
     * @return string[]
     */
    public function getRateRecommendation()
    {
        return $this->container['rate_recommendation'];
    }

    /**
     * Sets rate_recommendation
     *
     * @param string[] $rate_recommendation A list of reasons this rate is recommended. Available values are: BUYER_CHOSEN &mdash; The rate meets or exceeds the requirements of the buyer's preferred shipping option. CHEAPEST_ON_TIME &mdash; The rate is the cheapest rate available that will provide delivery within the seller's time frame commitment. EBAY_PLUS_OK &mdash; The rate complies with the shipping requirements of the eBay Plus program. FASTEST_ON_TIME &mdash; The rate has the fastest shipping time, and will provide delivery within the seller's time frame commitment. GUARANTEED_DELIVERY_OK &mdash; The rate complies with the shipping requirements of the eBay Guaranteed Delivery program.
     *
     * @return $this
     */
    public function setRateRecommendation($rate_recommendation)
    {
        $this->container['rate_recommendation'] = $rate_recommendation;

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
     * @param string $shipping_carrier_code The code name of the shipping carrier who will provide the service identified by shippingServiceCode.
     *
     * @return $this
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

        return $this;
    }

    /**
     * Gets shipping_carrier_name
     *
     * @return string
     */
    public function getShippingCarrierName()
    {
        return $this->container['shipping_carrier_name'];
    }

    /**
     * Sets shipping_carrier_name
     *
     * @param string $shipping_carrier_name The common name of the shipping carrier.
     *
     * @return $this
     */
    public function setShippingCarrierName($shipping_carrier_name)
    {
        $this->container['shipping_carrier_name'] = $shipping_carrier_name;

        return $this;
    }

    /**
     * Gets shipping_service_code
     *
     * @return string
     */
    public function getShippingServiceCode()
    {
        return $this->container['shipping_service_code'];
    }

    /**
     * Sets shipping_service_code
     *
     * @param string $shipping_service_code The code name of the shipping service to be provided by the carrier identified by shippingCarrierCode.
     *
     * @return $this
     */
    public function setShippingServiceCode($shipping_service_code)
    {
        $this->container['shipping_service_code'] = $shipping_service_code;

        return $this;
    }

    /**
     * Gets shipping_service_name
     *
     * @return string
     */
    public function getShippingServiceName()
    {
        return $this->container['shipping_service_name'];
    }

    /**
     * Sets shipping_service_name
     *
     * @param string $shipping_service_name The common name of the shipping service.
     *
     * @return $this
     */
    public function setShippingServiceName($shipping_service_name)
    {
        $this->container['shipping_service_name'] = $shipping_service_name;

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

