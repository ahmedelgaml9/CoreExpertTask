<?php

require_once 'interfaces/AdvertiserInterface.php';

class MainAdvertiser
{
    
    private $advertiser;

    public function __construct(AdvertiserInterface $advertiser)
    {
        $this->advertiser = $advertiser;
    }

    public function getHotelRooms(): array
    {
        return $this->advertiser->getHotelRooms();
    }
}


