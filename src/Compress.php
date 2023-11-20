<?php

namespace Compress-php\Compress;

use Compress-php\Compress\Resources\ApiClient;

class MySDK
{
    private $apiClient;

    public function __construct($apiKey, $apiBaseUrl)
    {
        $this->apiClient = new ApiClient($apiKey, $apiBaseUrl);
    }

    public function getUsers()
    {
        return $this->apiClient->get('/users');
    }

    // Additional methods for other API actions...
}