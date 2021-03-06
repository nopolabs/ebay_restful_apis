<?php
/**
 * ProductAspectConstraint
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Commerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog API
 *
 * Use the Catalog API to search the eBay catalog for products on which to base a seller's item listing; to retrieve a product record by its eBay product identifier (ePID); to submit a catalog change request to modify an existing product or create a new product; and to manage catalog change requests.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Commerce\Catalog\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Commerce\Catalog\ObjectSerializer;

/**
 * ProductAspectConstraint Class Doc Comment
 *
 * @category Class
 * @description This type contains information about the constraints for an aspect that&#39;s associated with a specific eBay category or eBay Catalog product. &lt;!-- Applies to both category and product aspects --&gt;
 * @package  Nopolabs\EBay\Commerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductAspectConstraint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductAspectConstraint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aspect_data_type' => 'string',
        'aspect_format' => 'string',
        'aspect_mode' => 'string',
        'aspect_required' => 'bool',
        'importance' => 'string',
        'product_to_aspect_cardinality' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aspect_data_type' => null,
        'aspect_format' => null,
        'aspect_mode' => null,
        'aspect_required' => null,
        'importance' => null,
        'product_to_aspect_cardinality' => null
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
        'aspect_data_type' => 'aspectDataType',
        'aspect_format' => 'aspectFormat',
        'aspect_mode' => 'aspectMode',
        'aspect_required' => 'aspectRequired',
        'importance' => 'importance',
        'product_to_aspect_cardinality' => 'productToAspectCardinality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_data_type' => 'setAspectDataType',
        'aspect_format' => 'setAspectFormat',
        'aspect_mode' => 'setAspectMode',
        'aspect_required' => 'setAspectRequired',
        'importance' => 'setImportance',
        'product_to_aspect_cardinality' => 'setProductToAspectCardinality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_data_type' => 'getAspectDataType',
        'aspect_format' => 'getAspectFormat',
        'aspect_mode' => 'getAspectMode',
        'aspect_required' => 'getAspectRequired',
        'importance' => 'getImportance',
        'product_to_aspect_cardinality' => 'getProductToAspectCardinality'
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
        $this->container['aspect_data_type'] = isset($data['aspect_data_type']) ? $data['aspect_data_type'] : null;
        $this->container['aspect_format'] = isset($data['aspect_format']) ? $data['aspect_format'] : null;
        $this->container['aspect_mode'] = isset($data['aspect_mode']) ? $data['aspect_mode'] : null;
        $this->container['aspect_required'] = isset($data['aspect_required']) ? $data['aspect_required'] : null;
        $this->container['importance'] = isset($data['importance']) ? $data['importance'] : null;
        $this->container['product_to_aspect_cardinality'] = isset($data['product_to_aspect_cardinality']) ? $data['product_to_aspect_cardinality'] : null;
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
     * Gets aspect_data_type
     *
     * @return string
     */
    public function getAspectDataType()
    {
        return $this->container['aspect_data_type'];
    }

    /**
     * Sets aspect_data_type
     *
     * @param string $aspect_data_type The data type used to represent the aspect. See the AspectDataTypeEnum type for more information about each data type. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/catalog/types/AspectDataTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setAspectDataType($aspect_data_type)
    {
        $this->container['aspect_data_type'] = $aspect_data_type;

        return $this;
    }

    /**
     * Gets aspect_format
     *
     * @return string
     */
    public function getAspectFormat()
    {
        return $this->container['aspect_format'];
    }

    /**
     * Sets aspect_format
     *
     * @param string $aspect_format Returned only if the value of aspectDataType is STRING or NUMBER. The required format for date or number values (e.g. a date value may be expressed as MMYYYY or MMYY).
     *
     * @return $this
     */
    public function setAspectFormat($aspect_format)
    {
        $this->container['aspect_format'] = $aspect_format;

        return $this;
    }

    /**
     * Gets aspect_mode
     *
     * @return string
     */
    public function getAspectMode()
    {
        return $this->container['aspect_mode'];
    }

    /**
     * Sets aspect_mode
     *
     * @param string $aspect_mode Indicates whether the seller must select from a closed list of aspect values, or can input the aspect value manually. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/catalog/types/AspectModeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setAspectMode($aspect_mode)
    {
        $this->container['aspect_mode'] = $aspect_mode;

        return $this;
    }

    /**
     * Gets aspect_required
     *
     * @return bool
     */
    public function getAspectRequired()
    {
        return $this->container['aspect_required'];
    }

    /**
     * Sets aspect_required
     *
     * @param bool $aspect_required A value of true indicates that the aspect is mandatory for products listed in this category.
     *
     * @return $this
     */
    public function setAspectRequired($aspect_required)
    {
        $this->container['aspect_required'] = $aspect_required;

        return $this;
    }

    /**
     * Gets importance
     *
     * @return string
     */
    public function getImportance()
    {
        return $this->container['importance'];
    }

    /**
     * Sets importance
     *
     * @param string $importance This value indicates the level of importance of the product identifier appearing in the catalog product. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ImportanceEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setImportance($importance)
    {
        $this->container['importance'] = $importance;

        return $this;
    }

    /**
     * Gets product_to_aspect_cardinality
     *
     * @return string
     */
    public function getProductToAspectCardinality()
    {
        return $this->container['product_to_aspect_cardinality'];
    }

    /**
     * Sets product_to_aspect_cardinality
     *
     * @param string $product_to_aspect_cardinality Indicates whether the aspect requires only one value, or can accept multiple values when listing in this category. An example of a product aspect that will often have numerous values is Features. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ItemToAspectCardinalityEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setProductToAspectCardinality($product_to_aspect_cardinality)
    {
        $this->container['product_to_aspect_cardinality'] = $product_to_aspect_cardinality;

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


