<?php

use PHPUnit\Framework\TestCase;
require_once 'classes/Aggregator.php';
require_once 'Test/MockAdvertiser1.php';
require_once 'Test/MockAdvertiser2.php';

class TestAggregator  extends TestCase
{

   
    public function testGetHotelRoomsReturnsArray()
    {
        $aggregator = new Aggregator();
        $aggregator->addAdvertiser(new MockAdvertiser1());
        $aggregator->addAdvertiser(new MockAdvertiser2());

        $result = $aggregator->getHotelRooms();

        $this->assertIsArray($result);
    }

    public function testGetHotelRoomsReturnsSortedRooms()
    {

        $aggregator = new Aggregator();
        $aggregator->addAdvertiser(new MockAdvertiser1());
        $aggregator->addAdvertiser(new MockAdvertiser2());
        $result = $aggregator->getHotelRooms();

        $this->assertEquals(115.00, $result[0]->total);
        $this->assertEquals(143.00, $result[1]->total);
   
    }

}

