<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Provider;

/**
 * Class ConfigProvider
 * @package NorthernLights\IPSConnectApi\Provider
 */
class ConfigProvider implements ConfigProviderInterface
{
    /** @var array */
    protected $config;

    /**
     * ConfigProvider constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = array_merge([
            'endpoint'  => null,
            'api_key'   => null,
            'debug'     => false,
            'timeout'   => 30.0,
            'http_auth' => [],
            'headers'   => [
                'User-Agent' => 'NorthernLights-IPSConnect-Client/1.0',
                'Accept'     => 'application/json'
            ],
            'custom'    => []
        ], $config);
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpointUrl(): string
    {
        return $this->config['endpoint'];
    }

    /**
     * {@inheritdoc}
     */
    public function getApiKey(): string
    {
        return $this->config['api_key'];
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpTimeout(): float
    {
        return $this->config['timeout'];
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpBasicAuth(): array
    {
        return $this->config['http_auth'];
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpHeaders(): array
    {
        return $this->config['headers'];
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpCustom(): array
    {
        return $this->config['custom'];
    }

    /**
     * {@inheritdoc}
     */
    public function isDebugMode(): bool
    {
        return $this->config['debug'];
    }
}
