<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi;

use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Http\Client as GuzzleHttpClient;
use GuzzleHttp\ClientInterface;
use NorthernLights\IPSConnectApi\Action\ApiActionInterface;
use NorthernLights\IPSConnectApi\Provider\ConfigProviderInterface;
use NorthernLights\IPSConnectApi\Provider\ResponseProvider;
use NorthernLights\IPSConnectApi\Provider\ResponseProviderInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Client
 * @package NorthernLights\IPSConnectApi
 */
class Client
{
    /** @var ConfigProviderInterface */
    protected $config;

    /** @var string */
    protected $apiKey;

    /** @var ClientInterface */
    protected $httpClient;

    /**
     * Client constructor.
     *
     * @param ConfigProviderInterface $config
     */
    public function __construct(ConfigProviderInterface $config)
    {
        $guzzleConfig = $this->prepareConfig($config);

        $this->httpClient = new GuzzleHttpClient($guzzleConfig);
    }

    /**
     * Send request / do action
     *
     * @param ApiActionInterface $action
     *
     * @return ResponseProviderInterface
     *
     */
    public function do(ApiActionInterface $action): ResponseProviderInterface
    {
        return new ResponseProvider(
            $this->request(
                $action->compileRequest()
            )
        );
    }

    /**
     * Perform request
     *
     * @param array $form
     *
     * @return ResponseInterface
     */
    private function request(array $form): ResponseInterface
    {
        $client   = $this->httpClient;
        $response = null;

        try {
            $response = $client->request('POST', '/', ['form_params' => $form]);
        } catch (BadResponseException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * @param ConfigProviderInterface $config
     */
    private function prepareConfig(ConfigProviderInterface $config): array
    {
        $this->config = $config;
        $this->apiKey = $config->getApiKey();

        $prepareConfig = [
            'base_uri' => $config->getEndpointUrl(),
            'timeout'  => $config->getHttpTimeout(),
            'headers'  => $config->getHttpHeaders(),
            'stream'   => true
        ];

        $httpBasicAuth = $config->getHttpBasicAuth();
        if (! empty($httpBasicAuth)) {
            $prepareConfig['auth'] = $httpBasicAuth;
        }

        $customConfig = $config->getHttpCustom();
        if (! empty($customConfig)) {
            $prepareConfig = array_merge($prepareConfig, $customConfig);
        }

        return $prepareConfig;
    }
}
