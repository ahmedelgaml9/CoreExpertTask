<?php

require_once 'classes/MainAdvertiser.php';
require_once 'classes/Aggregator.php';
require_once 'classes/Advertiser1.php';
require_once 'classes/Advertiser2.php';
require_once 'classes/Advertiser3.php';
header('Content-Type: application/json');

$aggregator = new Aggregator();
$aggregator->addAdvertiser(new Advertiser1());
$aggregator->addAdvertiser(new Advertiser2());
$aggregator->addAdvertiser(new Advertiser3()); 

$app  = new MainAdvertiser($aggregator);
$hotelRooms = $app->getHotelRooms();

echo json_encode($hotelRooms, JSON_PRETTY_PRINT);


?>