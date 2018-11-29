<?php
declare(strict_types=1);

namespace Nopolabs\EBay\Api\Factory;


class ApiConfig
{
    public const BASE_URI = 'baseUri';
    public const SCOPE = 'scope';
    public const CLIENT_ID = 'clientId';
    public const CLIENT_SECRET = 'clientSecret';

    private $baseUri;
    private $scope;
    private $clientId;
    private $clientSecret;

    public function __construct(array $config = [])
    {
        $this->baseUri = $config[self::BASE_URI] ?? ApiFactory::API_EBAY_COM;
        $this->scope = $config[self::SCOPE] ?? ApiFactory::DEFAULT_SCOPE;
        $this->clientId = $config[self::CLIENT_ID] ?? '';
        $this->clientSecret = $config[self::CLIENT_SECRET] ?? '';
    }

    public function setBaseUri(string $baseUri) : ApiConfig
    {
        $this->baseUri = $baseUri;
        return $this;
    }

    public function setScope(string $scope) : ApiConfig
    {
        $this->scope = $scope;
        return $this;
    }

    public function setClientId(string $id) : ApiConfig
    {
        $this->clientId = $id;
        return $this;
    }

    public function setClientSecret(string $secret) : ApiConfig
    {
        $this->clientSecret = $secret;
        return $this;
    }

    public function getBaseUri() : string
    {
        return $this->baseUri;
    }

    public function getScope() : string
    {
        return $this->scope;
    }

    public function getClientId() : string
    {
        return $this->clientId;
    }

    public function getClientSecret() : string
    {
        return $this->clientSecret;
    }
}