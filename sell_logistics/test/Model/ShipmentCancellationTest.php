<?php
/**
 * ShipmentCancellationTest
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
 * Please update the test case below to test the model.
 */

namespace Nopolabs\EBay\Sell\Logistics;

/**
 * ShipmentCancellationTest Class Doc Comment
 *
 * @category    Class */
// * @description This type defines a shipment cancellation by the date and time the cancellation request was made and the current status of the request.
/**
 * @package     Nopolabs\EBay\Sell\Logistics
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShipmentCancellationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "ShipmentCancellation"
     */
    public function testShipmentCancellation()
    {
    }

    /**
     * Test attribute "cancellation_requested_date"
     */
    public function testPropertyCancellationRequestedDate()
    {
    }

    /**
     * Test attribute "cancellation_status"
     */
    public function testPropertyCancellationStatus()
    {
    }
}
