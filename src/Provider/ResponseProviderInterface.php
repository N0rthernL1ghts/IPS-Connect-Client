<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Provider;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface ResponseProviderInterface
 * @package NorthernLights\IPSConnectApi\Provider
 */
interface ResponseProviderInterface
{
    /**
     * Was request successful?
     *
     * @return bool
     */
    public function getStatus(): bool;

    /**
     * Get action result
     *
     * @return array
     */
    public function getActionResult(): array;

    /**
     * Http response
     *
     * @return ResponseInterface
     */
    public function getHttpResponse(): ResponseInterface;
}
