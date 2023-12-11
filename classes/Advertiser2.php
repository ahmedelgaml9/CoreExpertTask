<?php

require_once 'interfaces/AdvertiserInterface.php';

class Advertiser2 implements AdvertiserInterface
{

    public function getHotelRooms(): array
    {

        $baseUrl = realpath(__DIR__ . '/../');

        $jsonFilePath = $baseUrl . '/public/hotel2.json';
        
        return json_decode(file_get_contents($jsonFilePath),true);        
        
    }

}