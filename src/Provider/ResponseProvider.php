<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Provider;

use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseProvider
 * @package NorthernLights\IPSConnectApi\Provider
 */
class ResponseProvider implements ResponseProviderInterface
{
    /** @var ResponseInterface  */
    protected $httpResponse;

    /**
     * ResponseProvider constructor.
     *
     * @param ResponseInterface $httpResponse
     */
    public function __construct(ResponseInterface $httpResponse)
    {
        $this->httpResponse = $httpResponse;
    }
}
