<?php

require_once 'interfaces/AdvertiserInterface.php';

class MockAdvertiser1 implements AdvertiserInterface
{

    public function getHotelRooms(): array
    {
        return [
            [
                'name' => 'Hotel B',
                'stars' => 5,
                'rooms' => [
                    ['code' => 'DBL-RM', 'net_price' => '150.00', 'taxes' => ['amount' => '15.00'], 'total' => '165.00'],
                    ['code' => 'HF-BOD', 'net_price' => '130.00', 'taxes' => ['amount' => '13.00'], 'total' => '143.00'],
                    ['code' => 'QUN-ROM', 'net_price' => '143.00', 'taxes' => ['amount' => '11.50'], 'total' => '154.50'],
                ],
            ],
          
        ];
    }
}