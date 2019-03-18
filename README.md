# EBay RESTful APIs for PHP

Nopolabs' ebay_restful_apis for PHP
===================================

Provides swagger generated php clients for these EBay APIS:

#### Commerce APIs
 - [Catalog API](https://developer.ebay.com/api-docs/commerce/catalog/static/overview.html)
 - [Taxonomy API](https://developer.ebay.com/api-docs/commerce/taxonomy/static/overview.html)
 - [Translation API](https://developer.ebay.com/api-docs/commerce/translation/static/overview.html)

#### Developer APIs
 - [Analytics API](https://developer.ebay.com/api-docs/developer/analytics/static/overview.html)

#### Sell APIs
 - [Account API](https://developer.ebay.com/api-docs/sell/account/static/overview.html)
 - [Analytics API](https://developer.ebay.com/api-docs/sell/analytics/static/overview.html)
 - [Compliance API](https://developer.ebay.com/api-docs/sell/compliance/static/overview.html)
 - [Fulfillment API](https://developer.ebay.com/api-docs/sell/fulfillment/static/overview.html)
 - [Inventory API](https://developer.ebay.com/api-docs/sell/inventory/static/overview.html)
 - [Logistics API](https://developer.ebay.com/api-docs/sell/logistics/static/overview.html)
 - [Marketing API](https://developer.ebay.com/api-docs/sell/marketing/static/overview.html)
 - [Metadata API](https://developer.ebay.com/api-docs/sell/metadata/static/overview.html)

## Example
```php
use Nopolabs\EBay\Api\Factory\ApiConfig;
use Nopolabs\EBay\Api\Factory\ApiFactory;
use Nopolabs\EBay\Commerce\Taxonomy\Api\CategoryTreeApi;
use Nopolabs\EBay\Commerce\Taxonomy\Model\CategoryTree;
use Nopolabs\EBay\Commerce\Taxonomy\Model\CategoryTreeNode;

// Get clientId and clientSecret from https://developer.ebay.com/my/keys
$config = new ApiConfig([
    'baseUri' => 'https://api.ebay.com', // FOR SANDBOX USE: https://api.sandbox.ebay.com
    'clientId' => 'INSERT App ID (Client ID) HERE',
    'clientSecret' => 'INSERT Cert ID (Client Secret) HERE',
]);

$factory = new ApiFactory($config);

$categoryTreeApi = $factory->getCategoryTreeApi();

$tree = $categoryTreeApi->getCategoryTree('0');
```

## Example using Symfony DI config
```xml
<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">

    <parameters>
        <parameter key="ebay.config" type="collection">
            <parameter key="baseUri">https://api.ebay.com</parameter>
            <parameter key="clientId">INSERT CLIENT ID HERE</parameter>
            <parameter key="clientSecret">INSERT CLIENT SECRET HERE</parameter>
        </parameter>
    </parameters>

    <services>
        <service id="ebay.apiConfig" class="Nopolabs\EBay\Api\Factory\ApiConfig" public="false">
            <argument>%ebay.config%</argument>
        </service>

        <service id="ebay.apiFactory" class="Nopolabs\EBay\Api\Factory\ApiFactory">
            <argument type="service" id="ebay.apiConfig"/>
        </service>

        <service id="ebay.categoryTreeApi">
            <factory service="ebay.apiFactory" method="getCategoryTreeApi"/>
        </service>
    </services>
</container>
```
