<?php

require_once 'interfaces/AdvertiserInterface.php';

class Advertiser1 implements AdvertiserInterface
{

    public function getHotelRooms(): array
    {

        $baseUrl = realpath(__DIR__ . '/../');

        $jsonFilePath = $baseUrl . '/public/hotel1.json';

        return json_decode(file_get_contents($jsonFilePath),true);
        
    }
}