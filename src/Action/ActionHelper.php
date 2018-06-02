<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Action;

/**
 * Class ActionHelper
 * @package NorthernLights\IPSConnectApi\Action
 */
abstract class ActionHelper
{
    protected $request;

    /**
     * {@inheritdoc}
     * NorthernLights\IPSConnectApi\Action\Interfaces\ActionInterface
     *
     */
    public function compileRequest(): array
    {
        return [];
    }
}
