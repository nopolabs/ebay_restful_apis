<?php
/**
 * RateLimitApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Developer\Analytics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Progress to Rate Limit API
 *
 * The Analytics API retrieves call-limit data and the quotas that are set for the RESTful APIs and their associated resources. Responses from calls made to getRateLimits and getUerRateLimits include a list of the applicable resources and the &quot;call limit&quot;, or quota, that is set for each resource. In addition to quota information, the response also includes the number of remaining calls available before the limit is reached, the time remaining before the quota resets, and the length of the &quot;time window&quot; to which the quota applies. The getRateLimits and getUserRateLimits methods retrieve call-limit information for either an application or user, respectively, and each method must be called with an appropriate OAuth token. That is, getRateLimites requires an access token generated with a client credentials grant and getUserRateLimites requires requires an access token generated with an authorization code grant. For more information, see OAuth tokens. Users can analyze the response data to see whether or not a limit might be reached, and from that determine if any action needs to be taken (such as programmatically throttling their request rate). For more on call limits, see Compatible Application Check.
 *
 * OpenAPI spec version: v1_beta.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Nopolabs\EBay\Developer\Analytics;

use \Nopolabs\EBay\Developer\Analytics\Configuration;
use \Nopolabs\EBay\Developer\Analytics\ApiException;
use \Nopolabs\EBay\Developer\Analytics\ObjectSerializer;

/**
 * RateLimitApiTest Class Doc Comment
 *
 * @category Class
 * @package  Nopolabs\EBay\Developer\Analytics
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RateLimitApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for getRateLimits
     *
     * .
     *
     */
    public function testGetRateLimits()
    {
    }
}
