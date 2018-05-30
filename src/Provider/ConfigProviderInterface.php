<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Provider;

/**
 * Interface ConfigProviderInterface
 * @package NorthernLights\IPSConnectApi\Provider
 */
interface ConfigProviderInterface
{
    /**
     * Return endpoint URL
     *
     * @return string
     */
    public function getEndpointUrl(): string;

    /**
     * Return API key
     *
     * @return string
     */
    public function getApiKey(): string;

    /**
     * Get http client timeout
     * Optional.
     *
     * @return float
     */
    public function getHttpTimeout(): float;

    /**
     * Get HTTP basic auth
     * Optional.
     *
     * @return array|null
     */
    public function getHttpBasicAuth(): array;

    /**
     * Get default headers
     * Optional.
     *
     * @return array
     */
    public function getHttpHeaders(): array;

    /**
     * Get HTTP custom
     * Optional.
     *
     * @return array
     */
    public function getHttpCustom(): array;

    /**
     * Whether or not is debug mode enabled
     * Optional.
     *
     * @return bool
     */
    public function isDebugMode(): bool;
}
