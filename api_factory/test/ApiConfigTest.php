<?php
declare(strict_types=1);

namespace Nopolabs\EBay\Api\Factory;

use PHPUnit\Framework\TestCase;

class ApiConfigTest extends TestCase
{
    public function testDefaults() : void
    {
        $config = new ApiConfig();

        $this->assertSame(ApiFactory::API_EBAY_COM, $config->getBaseUri());
        $this->assertSame(ApiFactory::DEFAULT_SCOPE, $config->getScope());
        $this->assertSame('', $config->getClientId());
        $this->assertSame('', $config->getClientSecret());
    }

    public function testConstructor() : void
    {
        $config = new ApiConfig([
            ApiConfig::BASE_URI => 'http://base.uri',
            ApiConfig::SCOPE => 'my-scope',
            ApiConfig::CLIENT_ID => 'client-id',
            ApiConfig::CLIENT_SECRET => 'client-secret',
        ]);

        $this->assertSame('http://base.uri', $config->getBaseUri());
        $this->assertSame('my-scope', $config->getScope());
        $this->assertSame('client-id', $config->getClientId());
        $this->assertSame('client-secret', $config->getClientSecret());
    }

    public function testSetBaseUri() : void
    {
        $config = new ApiConfig();

        $config->setBaseUri('http://base.uri');
        $this->assertSame('http://base.uri', $config->getBaseUri());
    }

    public function testSetScope() : void
    {
        $config = new ApiConfig();

        $config->setScope('my-scope');
        $this->assertSame('my-scope', $config->getScope());
    }

    public function testSetClientId() : void
    {
        $config = new ApiConfig();

        $config->setClientId('client-id');
        $this->assertSame('client-id', $config->getClientId());
    }

    public function testSetClientSecret() : void
    {
        $config = new ApiConfig();

        $config->setClientSecret('client-secret');
        $this->assertSame('client-secret', $config->getClientSecret());
    }
}