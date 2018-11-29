<?php
/**
 * ChangeRequest
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
 * ChangeRequest Class Doc Comment
 *
 * @category Class
 * @description This type contains the full details of a specified catalog change request, including the original payload of the &lt;b&gt;createChangeRequest&lt;/b&gt; call, processing status and key dates, and resolution details.
 * @package  Nopolabs\EBay\Commerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChangeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChangeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'change_request_id' => 'string',
        'change_request_status' => 'string',
        'change_request_type' => 'string',
        'creation_date' => 'string',
        'expected_completion_date' => 'string',
        'process_resolution' => '\Nopolabs\EBay\Commerce\Catalog\Model\ProcessResolution',
        'process_status_message' => 'string',
        'reason_for_change_request' => 'string',
        'reference_id' => 'string',
        'reference_type' => 'string',
        'resolution_date' => 'string',
        'suggested_product' => '\Nopolabs\EBay\Commerce\Catalog\Model\SuggestedProduct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'change_request_id' => null,
        'change_request_status' => null,
        'change_request_type' => null,
        'creation_date' => null,
        'expected_completion_date' => null,
        'process_resolution' => null,
        'process_status_message' => null,
        'reason_for_change_request' => null,
        'reference_id' => null,
        'reference_type' => null,
        'resolution_date' => null,
        'suggested_product' => null
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
        'change_request_id' => 'changeRequestId',
        'change_request_status' => 'changeRequestStatus',
        'change_request_type' => 'changeRequestType',
        'creation_date' => 'creationDate',
        'expected_completion_date' => 'expectedCompletionDate',
        'process_resolution' => 'processResolution',
        'process_status_message' => 'processStatusMessage',
        'reason_for_change_request' => 'reasonForChangeRequest',
        'reference_id' => 'referenceId',
        'reference_type' => 'referenceType',
        'resolution_date' => 'resolutionDate',
        'suggested_product' => 'suggestedProduct'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'change_request_id' => 'setChangeRequestId',
        'change_request_status' => 'setChangeRequestStatus',
        'change_request_type' => 'setChangeRequestType',
        'creation_date' => 'setCreationDate',
        'expected_completion_date' => 'setExpectedCompletionDate',
        'process_resolution' => 'setProcessResolution',
        'process_status_message' => 'setProcessStatusMessage',
        'reason_for_change_request' => 'setReasonForChangeRequest',
        'reference_id' => 'setReferenceId',
        'reference_type' => 'setReferenceType',
        'resolution_date' => 'setResolutionDate',
        'suggested_product' => 'setSuggestedProduct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'change_request_id' => 'getChangeRequestId',
        'change_request_status' => 'getChangeRequestStatus',
        'change_request_type' => 'getChangeRequestType',
        'creation_date' => 'getCreationDate',
        'expected_completion_date' => 'getExpectedCompletionDate',
        'process_resolution' => 'getProcessResolution',
        'process_status_message' => 'getProcessStatusMessage',
        'reason_for_change_request' => 'getReasonForChangeRequest',
        'reference_id' => 'getReferenceId',
        'reference_type' => 'getReferenceType',
        'resolution_date' => 'getResolutionDate',
        'suggested_product' => 'getSuggestedProduct'
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
        $this->container['change_request_id'] = isset($data['change_request_id']) ? $data['change_request_id'] : null;
        $this->container['change_request_status'] = isset($data['change_request_status']) ? $data['change_request_status'] : null;
        $this->container['change_request_type'] = isset($data['change_request_type']) ? $data['change_request_type'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['expected_completion_date'] = isset($data['expected_completion_date']) ? $data['expected_completion_date'] : null;
        $this->container['process_resolution'] = isset($data['process_resolution']) ? $data['process_resolution'] : null;
        $this->container['process_status_message'] = isset($data['process_status_message']) ? $data['process_status_message'] : null;
        $this->container['reason_for_change_request'] = isset($data['reason_for_change_request']) ? $data['reason_for_change_request'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['reference_type'] = isset($data['reference_type']) ? $data['reference_type'] : null;
        $this->container['resolution_date'] = isset($data['resolution_date']) ? $data['resolution_date'] : null;
        $this->container['suggested_product'] = isset($data['suggested_product']) ? $data['suggested_product'] : null;
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
     * Gets change_request_id
     *
     * @return string
     */
    public function getChangeRequestId()
    {
        return $this->container['change_request_id'];
    }

    /**
     * Sets change_request_id
     *
     * @param string $change_request_id The unique identifier of this change request. This value was originally generated by the createChangeRequest call and returned in the location code of that call's HTTP response header.
     *
     * @return $this
     */
    public function setChangeRequestId($change_request_id)
    {
        $this->container['change_request_id'] = $change_request_id;

        return $this;
    }

    /**
     * Gets change_request_status
     *
     * @return string
     */
    public function getChangeRequestStatus()
    {
        return $this->container['change_request_status'];
    }

    /**
     * Sets change_request_status
     *
     * @param string $change_request_status The current processing status of this change request. If the value of this field is APPROVED_WITH_MODIFICATIONS, the change request has been approved with one or more modifications applied by eBay. Check the processResolution.corrections response object for details about the modifications. If the value of this field is REJECTED, the change request has been rejected for violating eBay standards or for conflicting with an existing product record. Check the processResolution.violations response object for details about the rejection. Available values: APPROVED &mdash; Upon review, the change request has been approved as submitted. APPROVED_WITH_MODIFICATIONS &mdash; Upon review, the change request has been approved with one or more corrections applied by eBay. Check the processResolution.corrections response object for details about the modifications. REJECTED &mdash; Upon review, the change request has been rejected for a conflict with an existing catalog product, or for violating eBay standards. Check the processResolution.violations response object for details about the rejection. SUBMITTED &mdash; The change request has been submitted and is being processed. UNDER_EXTENDED_REVIEW &mdash; After one hour of review, the change request is under extended review by eBay. UNDER_REVIEW &mdash; Upon submission/processing, the change request is under review by eBay. This typically takes up to one hour. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ChangeRequestStatus.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setChangeRequestStatus($change_request_status)
    {
        $this->container['change_request_status'] = $change_request_status;

        return $this;
    }

    /**
     * Gets change_request_type
     *
     * @return string
     */
    public function getChangeRequestType()
    {
        return $this->container['change_request_type'];
    }

    /**
     * Sets change_request_type
     *
     * @param string $change_request_type The type of catalog modification being requested by this change request. Available values: PRODUCT_CREATION &mdash; Change request to create a new product PRODUCT_UPDATE &mdash; Change request to update an existing product For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ChangeRequestType.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setChangeRequestType($change_request_type)
    {
        $this->container['change_request_type'] = $change_request_type;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date The creation date of this change request.
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets expected_completion_date
     *
     * @return string
     */
    public function getExpectedCompletionDate()
    {
        return $this->container['expected_completion_date'];
    }

    /**
     * Sets expected_completion_date
     *
     * @param string $expected_completion_date eBay's estimate of the completion date of this change request.
     *
     * @return $this
     */
    public function setExpectedCompletionDate($expected_completion_date)
    {
        $this->container['expected_completion_date'] = $expected_completion_date;

        return $this;
    }

    /**
     * Gets process_resolution
     *
     * @return \Nopolabs\EBay\Commerce\Catalog\Model\ProcessResolution
     */
    public function getProcessResolution()
    {
        return $this->container['process_resolution'];
    }

    /**
     * Sets process_resolution
     *
     * @param \Nopolabs\EBay\Commerce\Catalog\Model\ProcessResolution $process_resolution process_resolution
     *
     * @return $this
     */
    public function setProcessResolution($process_resolution)
    {
        $this->container['process_resolution'] = $process_resolution;

        return $this;
    }

    /**
     * Gets process_status_message
     *
     * @return string
     */
    public function getProcessStatusMessage()
    {
        return $this->container['process_status_message'];
    }

    /**
     * Sets process_status_message
     *
     * @param string $process_status_message A text description and explanation of the status indicated by the changeRequestStatus field.
     *
     * @return $this
     */
    public function setProcessStatusMessage($process_status_message)
    {
        $this->container['process_status_message'] = $process_status_message;

        return $this;
    }

    /**
     * Gets reason_for_change_request
     *
     * @return string
     */
    public function getReasonForChangeRequest()
    {
        return $this->container['reason_for_change_request'];
    }

    /**
     * Sets reason_for_change_request
     *
     * @param string $reason_for_change_request A text description of why this change request was submitted.
     *
     * @return $this
     */
    public function setReasonForChangeRequest($reason_for_change_request)
    {
        $this->container['reason_for_change_request'] = $reason_for_change_request;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string $reference_id Returned if the referenceType field is returned in the response. This is the identifier of an object of the type specified by the value of referenceType. For example, if the value of referenceType is INVENTORY_ITEM, this field should contain the seller's SKU for an inventory item.
     *
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets reference_type
     *
     * @return string
     */
    public function getReferenceType()
    {
        return $this->container['reference_type'];
    }

    /**
     * Sets reference_type
     *
     * @param string $reference_type Returned if this field was included in the the createChangeRequest call. This specifies the type of eBay object that the seller wants to create or update using the requested change. It applies to objects that are incomplete due to the need for a matching catalog product. Providing a referenceType and a referenceId in a catalog change request enables eBay to automatically apply the resulting new or updated product directly to the specified object without requiring additional action on your part. Available values: INVENTORY_ITEM &mdash; The requested change will support the completion of an inventory item, which you can then use to create an offer. LISTING &mdash; The requested change will support the modification of an active product listing. LISTING_DRAFT &mdash; The requested change will support the completion of an offer, which you can then publish as a product listing. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/catalog/types/ReferenceType.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setReferenceType($reference_type)
    {
        $this->container['reference_type'] = $reference_type;

        return $this;
    }

    /**
     * Gets resolution_date
     *
     * @return string
     */
    public function getResolutionDate()
    {
        return $this->container['resolution_date'];
    }

    /**
     * Sets resolution_date
     *
     * @param string $resolution_date Returned if the value of changeRequestStatus is APPROVED, APPROVED_WITH_MODIFICATIONS, or REJECTED. This is the date that the change request was resolved.
     *
     * @return $this
     */
    public function setResolutionDate($resolution_date)
    {
        $this->container['resolution_date'] = $resolution_date;

        return $this;
    }

    /**
     * Gets suggested_product
     *
     * @return \Nopolabs\EBay\Commerce\Catalog\Model\SuggestedProduct
     */
    public function getSuggestedProduct()
    {
        return $this->container['suggested_product'];
    }

    /**
     * Sets suggested_product
     *
     * @param \Nopolabs\EBay\Commerce\Catalog\Model\SuggestedProduct $suggested_product suggested_product
     *
     * @return $this
     */
    public function setSuggestedProduct($suggested_product)
    {
        $this->container['suggested_product'] = $suggested_product;

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

