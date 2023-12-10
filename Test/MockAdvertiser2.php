<?php

require_once 'interfaces/AdvertiserInterface.php';

class MockAdvertiser2 implements AdvertiserInterface
{

    public function getHotelRooms(): array
    {
        return [
            [
                'name' => 'Hotel D',
                'stars' => 5,
                'rooms' => [
                    ['code' => 'SNGRM', 'net_price' => '100.00', 'taxes' => ['amount' => '15.00'], 'total' => '115.00'],
                    ['code' => 'FU-BOD', 'net_price' => '160.00', 'taxes' => ['amount' => '16.00'], 'total' => '176.00'],
                    ['code' => 'POAROM', 'net_price' => '155.00', 'taxes' => ['amount' => '14.00'], 'total' => '169.00'],
                ],
            
            ],
           
        ];
    }

}