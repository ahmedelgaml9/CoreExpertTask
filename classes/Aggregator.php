<?php

require_once 'interfaces/AdvertiserInterface.php';
require_once 'classes/Room.php';


class Aggregator implements AdvertiserInterface
{

    private $advertisers = [];

    public function addAdvertiser(AdvertiserInterface $advertiser)
    {
        $this->advertisers[] = $advertiser;
    }

    public function getHotelRooms(): array
    {
        
        $allRooms = [];

        foreach ($this->advertisers as $advertiser) {
            
            $allRooms = array_merge($allRooms, $advertiser->getHotelRooms());
        }

        $uniqueRooms = $this->filterUniqueRooms($allRooms);

        usort($uniqueRooms, function ($a, $b) {
            
             return $a->total - $b->total;
        });

         return $uniqueRooms;
    }

    private function filterUniqueRooms(array $allRooms): array
    {

        $uniqueRooms = [];

        foreach ($allRooms as $hotel) {

            foreach ($hotel['rooms'] as $roomData) {

                $room = new Room();
                $room->name = $hotel['name'];
                $room->code = $roomData['code'];
                $room->netPrice = $roomData['net_price'] ?? null;
                $room->taxes = $roomData['taxes']['amount'] ?? null;
                $room->total = $roomData['total'] ?? null;

                $roomKey = $room->name . '-' . $room->code;

                if (!isset($uniqueRooms[$roomKey]) || $room->total < $uniqueRooms[$roomKey]->total) {
                    $uniqueRooms[$roomKey] = $room;
                }
            }
        }

         return array_values($uniqueRooms);
    }
}

