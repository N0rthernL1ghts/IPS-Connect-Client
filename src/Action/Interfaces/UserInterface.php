<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Action\Interfaces;

/**
 * Interface UserInterface
 * @package NorthernLights\IPSConnectApi\Action
 */
interface UserInterface extends ActionInterface
{
    /**
     * Set unique user id
     *
     * @param int $id
     *
     * @return int
     */
    public function setUserId(int $id): int;
}
