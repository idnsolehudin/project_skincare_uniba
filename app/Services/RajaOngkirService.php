<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Config\RajaOngkir;

class RajaOngkirService
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $config = new RajaOngkir();
        $this->apiKey = $config->apiKey;
        $this->baseUrl = $config->baseUrl;

        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'key' => $this->apiKey,
            ]
        ]);
    }

    public function getProvinces()
    {
        $response = $this->client->get('province');
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getCities($provinceId)
    {   
        $response = $this->client->get('city', [
            'query' => ['province' => $provinceId]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getOngkir($origin, $destination, $weight, $courier)
    {
        $response = $this->client->post('cost', [
            'form_params' => [
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier,
            ]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
