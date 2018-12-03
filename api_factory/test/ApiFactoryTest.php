<?php
declare(strict_types=1);

namespace Nopolabs\EBay\Api\Factory;


use GuzzleHttp\Client;
use Nopolabs\EBay\Commerce\Catalog\Api\ChangeRequestApi;
use Nopolabs\EBay\Commerce\Catalog\Api\ProductApi;
use Nopolabs\EBay\Commerce\Catalog\Api\ProductMetadataApi;
use Nopolabs\EBay\Commerce\Catalog\Api\ProductSummaryApi;
use Nopolabs\EBay\Commerce\Taxonomy\Api\CategoryTreeApi;
use Nopolabs\EBay\Commerce\Translation\Api\LanguageApi;
use Nopolabs\EBay\Developer\Analytics\Api\RateLimitApi;
use Nopolabs\EBay\Developer\Analytics\Api\UserRateLimitApi;
use Nopolabs\EBay\Sell\Account\Api\FulfillmentPolicyApi;
use Nopolabs\EBay\Sell\Account\Api\PaymentPolicyApi;
use Nopolabs\EBay\Sell\Account\Api\PaymentsProgramApi;
use Nopolabs\EBay\Sell\Account\Api\PrivilegeApi;
use Nopolabs\EBay\Sell\Account\Api\ProgramApi;
use Nopolabs\EBay\Sell\Account\Api\RateTableApi;
use Nopolabs\EBay\Sell\Account\Api\ReturnPolicyApi;
use Nopolabs\EBay\Sell\Account\Api\SalesTaxApi;
use Nopolabs\EBay\Sell\Analytics\Api\SellerStandardsProfileApi;
use Nopolabs\EBay\Sell\Analytics\Api\TrafficReportApi;
use Nopolabs\EBay\Sell\Compliance\Api\ListingViolationApi;
use Nopolabs\EBay\Sell\Compliance\Api\ListingViolationSummaryApi;
use Nopolabs\EBay\Sell\Fulfillment\Api\OrderApi;
use Nopolabs\EBay\Sell\Fulfillment\Api\ShippingFulfillmentApi;
use Nopolabs\EBay\Sell\Inventory\Api\InventoryItemApi;
use Nopolabs\EBay\Sell\Inventory\Api\InventoryItemGroupApi;
use Nopolabs\EBay\Sell\Inventory\Api\ListingApi;
use Nopolabs\EBay\Sell\Inventory\Api\LocationApi;
use Nopolabs\EBay\Sell\Inventory\Api\OfferApi;
use Nopolabs\EBay\Sell\Inventory\Api\ProductCompatibilityApi;
use Nopolabs\EBay\Sell\Logistics\Api\ShipmentApi;
use Nopolabs\EBay\Sell\Logistics\Api\ShippingQuoteApi;
use Nopolabs\EBay\Sell\Marketing\Api\AdApi;
use Nopolabs\EBay\Sell\Marketing\Api\AdReportApi;
use Nopolabs\EBay\Sell\Marketing\Api\AdReportMetadataApi;
use Nopolabs\EBay\Sell\Marketing\Api\AdReportTaskApi;
use Nopolabs\EBay\Sell\Marketing\Api\CampaignApi;
use Nopolabs\EBay\Sell\Marketing\Api\ItemPriceMarkdownApi;
use Nopolabs\EBay\Sell\Marketing\Api\ItemPromotionApi;
use Nopolabs\EBay\Sell\Marketing\Api\PromotionApi;
use Nopolabs\EBay\Sell\Marketing\Api\PromotionReportApi;
use Nopolabs\EBay\Sell\Marketing\Api\PromotionSummaryReportApi;
use Nopolabs\EBay\Sell\Metadata\Api\CountryApi;
use Nopolabs\EBay\Sell\Metadata\Api\MarketplaceApi;
use PHPUnit\Framework\TestCase;

class ApiFactoryTest extends TestCase
{
    private $factory;

    protected function setUp()
    {
        $apiConfig = $this->createMock(ApiConfig::class);
        $oauth2Client = $this->createMock(Client::class);
        $this->factory = new ApiFactory($apiConfig, $oauth2Client);
    }

    public function testFactory() : void
    {
        $this->assertInstanceOf(ChangeRequestApi::class, $this->factory->getChangeRequestApi());
        $this->assertInstanceOf(ProductApi::class, $this->factory->getProductApi());
        $this->assertInstanceOf(ProductMetadataApi::class, $this->factory->getProductMetadataApi());
        $this->assertInstanceOf(ProductSummaryApi::class, $this->factory->getProductSummaryApi());
        $this->assertInstanceOf(CategoryTreeApi::class, $this->factory->getCategoryTreeApi());
        $this->assertInstanceOf(LanguageApi::class, $this->factory->getLanguageApi());
        $this->assertInstanceOf(RateLimitApi::class, $this->factory->getRateLimitApi());
        $this->assertInstanceOf(UserRateLimitApi::class, $this->factory->getUserRateLimitApi());
        $this->assertInstanceOf(FulfillmentPolicyApi::class, $this->factory->getFulfillmentPolicyApi());
        $this->assertInstanceOf(PaymentPolicyApi::class, $this->factory->getPaymentPolicyApi());
        $this->assertInstanceOf(PaymentsProgramApi::class, $this->factory->getPaymentsProgramApi());
        $this->assertInstanceOf(PrivilegeApi::class, $this->factory->getPrivilegeApi());
        $this->assertInstanceOf(ProgramApi::class, $this->factory->getProgramApi());
        $this->assertInstanceOf(RateTableApi::class, $this->factory->getRateTableApi());
        $this->assertInstanceOf(ReturnPolicyApi::class, $this->factory->getReturnPolicyApi());
        $this->assertInstanceOf(SalesTaxApi::class, $this->factory->getSalesTaxApi());
        $this->assertInstanceOf(SellerStandardsProfileApi::class, $this->factory->getSellerStandardsProfileApi());
        $this->assertInstanceOf(TrafficReportApi::class, $this->factory->getTrafficReportApi());
        $this->assertInstanceOf(ListingViolationApi::class, $this->factory->getListingViolationApi());
        $this->assertInstanceOf(ListingViolationSummaryApi::class, $this->factory->getListingViolationSummaryApi());
        $this->assertInstanceOf(OrderApi::class, $this->factory->getOrderApi());
        $this->assertInstanceOf(ShippingFulfillmentApi::class, $this->factory->getShippingFulfillmentApi());
        $this->assertInstanceOf(InventoryItemApi::class, $this->factory->getInventoryItemApi());
        $this->assertInstanceOf(InventoryItemGroupApi::class, $this->factory->getInventoryItemGroupApi());
        $this->assertInstanceOf(ListingApi::class, $this->factory->getListingApi());
        $this->assertInstanceOf(LocationApi::class, $this->factory->getLocationApi());
        $this->assertInstanceOf(OfferApi::class, $this->factory->getOfferApi());
        $this->assertInstanceOf(ProductCompatibilityApi::class, $this->factory->getProductCompatibilityApi());
        $this->assertInstanceOf(ShipmentApi::class, $this->factory->getShipmentApi());
        $this->assertInstanceOf(ShippingQuoteApi::class, $this->factory->getShippingQuoteApi());
        $this->assertInstanceOf(AdApi::class, $this->factory->getAdApi());
        $this->assertInstanceOf(AdReportApi::class, $this->factory->getAdReportApi());
        $this->assertInstanceOf(AdReportMetadataApi::class, $this->factory->getAdReportMetadataApi());
        $this->assertInstanceOf(AdReportTaskApi::class, $this->factory->getAdReportTaskApi());
        $this->assertInstanceOf(CampaignApi::class, $this->factory->getCampaignApi());
        $this->assertInstanceOf(ItemPriceMarkdownApi::class, $this->factory->getItemPriceMarkdownApi());
        $this->assertInstanceOf(ItemPromotionApi::class, $this->factory->getItemPromotionApi());
        $this->assertInstanceOf(PromotionApi::class, $this->factory->getPromotionApi());
        $this->assertInstanceOf(PromotionReportApi::class, $this->factory->getPromotionReportApi());
        $this->assertInstanceOf(PromotionSummaryReportApi::class, $this->factory->getPromotionSummaryReportApi());
        $this->assertInstanceOf(CountryApi::class, $this->factory->getCountryApi());
        $this->assertInstanceOf(MarketplaceApi::class, $this->factory->getMarketplaceApi());
    }
}