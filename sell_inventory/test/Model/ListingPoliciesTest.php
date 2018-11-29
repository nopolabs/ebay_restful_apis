<?php
/**
 * ListingPoliciesTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Inventory
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There is also a call in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * OpenAPI spec version: v1.6.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Nopolabs\EBay\Sell\Inventory;

/**
 * ListingPoliciesTest Class Doc Comment
 *
 * @category    Class */
// * @description This type is used to identify the payment, return, and fulfillment listing policies that will be, or are associated with the listing. Every published offer must have a payment, return, and fulfillment listing policy associated with it. This type is also used to override the shipping costs of one or more shipping service options that are associated with the fulfillment policy, or to enable eBay Plus eligibility for a listing.
/**
 * @package     Nopolabs\EBay\Sell\Inventory
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ListingPoliciesTest extends \PHPUnit_Framework_TestCase
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
     * Test "ListingPolicies"
     */
    public function testListingPolicies()
    {
    }

    /**
     * Test attribute "payment_policy_id"
     */
    public function testPropertyPaymentPolicyId()
    {
    }

    /**
     * Test attribute "return_policy_id"
     */
    public function testPropertyReturnPolicyId()
    {
    }

    /**
     * Test attribute "shipping_cost_overrides"
     */
    public function testPropertyShippingCostOverrides()
    {
    }

    /**
     * Test attribute "fulfillment_policy_id"
     */
    public function testPropertyFulfillmentPolicyId()
    {
    }

    /**
     * Test attribute "ebay_plus_if_eligible"
     */
    public function testPropertyEbayPlusIfEligible()
    {
    }
}
