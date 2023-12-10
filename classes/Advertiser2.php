<?php

require_once 'interfaces/AdvertiserInterface.php';

class Advertiser2 implements AdvertiserInterface
{

    public function getHotelRooms(): array
    {

        $baseDirectory ='http://localhost/Projectdemo';

        $jsonFilePath = $baseDirectory . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'advertiser2.json';

        return json_decode(file_get_contents($jsonFilePath),true);    

    }

}