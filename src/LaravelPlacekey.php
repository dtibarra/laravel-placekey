<?php

namespace Realtydev\LaravelPlacekey;

use Realtydev\LaravelPlacekey\Services\PlacekeyService;

class LaravelPlacekey
{
    protected $service;
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->service = app(PlacekeyService::class, ['config' => $config]);
    }

    public function getPlacekeyForCoordinates($latitude, $longitude, $queryId = null)
    {
        return $this->service->getPlacekeyForCoordinates($latitude, $longitude, $queryId);
    }

    public function getPlacekeyForAddress($street, $city, $region, $postal_code, $countryCode)
    {
        return $this->service->getPlacekeyForAddress($street, $city, $region, $postal_code, $countryCode);
    }

    public function getCurrentActivePlacekeyAndPredecessors($placekeys)
    {
        return $this->service->getCurrentActivePlacekeyAndPredecessors($placekeys);
    }
}
