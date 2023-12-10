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

        $this->assertEquals(119.00, $result[0]->total);
        $this->assertEquals(143.00, $result[1]->total);
        $this->assertEquals(152.00, $result[2]->total);
        $this->assertEquals(154.50, $result[3]->total);
        $this->assertEquals(167.00, $result[4]->total);
        $this->assertEquals(176.00, $result[5]->total);
        $this->assertEquals(180.00, $result[6]->total);
        $this->assertEquals(199.00, $result[7]->total);
    }

}

