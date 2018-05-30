<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Action\Interfaces;

/**
 * Interface ActionInterface
 * @package NorthernLights\IPSConnectApi\Action
 */
interface ActionInterface
{
    /**
     * Compile request
     *
     * @return array
     */
    public function compileRequest(): array;
}
