<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Order
{

    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    public function OrdersAPI(): array
    {


        $response = $this->client->request('GET', 'https://4ebb0152-1174-42f0-ba9b-4d6a69cf93be.mock.pstmn.io/orders', [
            'headers' => [
                'x-api-key' => 'PMAK-62642462da39cd50e9ab4ea7-815e244f4fdea2d2075d8966cac3b7f10b'
            ]
        ]);


        return $response->toArray();

    }

    public function ContactAPI(): array
    {
        $response = $this->client->request('GET', 'https://4ebb0152-1174-42f0-ba9b-4d6a69cf93be.mock.pstmn.io/contacts', [
            'headers' => [
                'x-api-key' => 'PMAK-62642462da39cd50e9ab4ea7-815e244f4fdea2d2075d8966cac3b7f10b'
            ]
        ]);
        return $response->toArray();
    }

}