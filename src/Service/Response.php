<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Service;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;

/**
 * Class Response
 * @package NorthernLights\IPSConnectApi\Service
 */
class Response implements ResponseInterface
{
    /** @var PsrResponseInterface  */
    protected $httpResponse;

    /**
     * Response constructor.
     *
     * @param PsrResponseInterface $httpResponse
     */
    public function __construct(PsrResponseInterface $httpResponse)
    {
        $this->httpResponse = $httpResponse;
    }
}
