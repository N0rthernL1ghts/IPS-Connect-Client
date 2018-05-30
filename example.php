<?php

declare(strict_types=1);

namespace NorthernLights\IPSConnectApi\Example;

use NorthernLights\IPSConnectApi\Action\Login;
use NorthernLights\IPSConnectApi\Client;
use NorthernLights\IPSConnectApi\Provider\ConfigProvider;
use NorthernLights\IPSConnectApi\Provider\ConfigProviderInterface;

/** @var ConfigProviderInterface $config */
$config = new ConfigProvider([
    'endpoint' => 'https://www.example.com/applications/core/interface/ipsconnect/ipsconnect.php',
    'api_key' => '47a750e549b46fd7641d2245c656f421'
]);

// Initialize api client and pass ConfigProvider interface instance
$client = new Client($config);

// Initialize login action
$loginAction = new Login();
$loginAction->setUserId(12);

// Perform request with Login action instance
$response = $client->do($loginAction);

var_dump($response->getActionResult());