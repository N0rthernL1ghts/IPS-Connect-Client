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
     * @return self
     */
    public function setUserId(int $id): self;

    /**
     * Set user display name
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName): self;

    /**
     * Set user email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self;

    /**
     * Set user password (not hash)
     *
     * @param string $password
     * @param $salt
     *
     * @return self
     */
    public function setPassword(string $password, $salt): self;
}
