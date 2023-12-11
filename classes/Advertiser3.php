<?php

require_once 'interfaces/AdvertiserInterface.php';

class Advertiser3 implements AdvertiserInterface
{

    public function getHotelRooms(): array
    {
        
        $baseUrl = realpath(__DIR__ . '/../');

        $jsonFilePath = $baseUrl . '/public/hotel3.json';

        return json_decode(file_get_contents($jsonFilePath),true);
        
    }


}