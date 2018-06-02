<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Service;

use Psr\Http\Message\ResponseInterface as PsrResponseInterface;

/**
 * Interface ResponseInterface
 * @package NorthernLights\IPSConnectApi\Service
 */
interface ResponseInterface
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
     * @return PsrResponseInterface
     */
    public function getHttpResponse(): PsrResponseInterface;
}
