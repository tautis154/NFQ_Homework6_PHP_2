<?php

use Nfq\SingleRoom as SingleRoom;
use Nfq\Guest as Guest;
use Nfq\Reservation as Reservation;
use Nfq\BookingManager as BookingManager;

require 'vendor/autoload.php';

$room = new SingleRoom(1408,99);
$guest = new Guest('Vardenis','Pavardenis');

$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);

BookingManager::bookRoom($room, $reservation);