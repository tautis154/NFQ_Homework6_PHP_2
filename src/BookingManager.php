<?php

namespace Nfq;

class BookingManager
{
    public static function bookRoom(Room $room, Reservation $reservation)
    {
        $output = sprintf(
            'Room <strong>%d</strong> successfully booked for' .
            '<strong>%s</strong> from <time>%s</time> to <time>%s</time>!',
            $room->getRoomNumber(),
            $reservation->getGuest(),
            $reservation->getStartDate()->format('Y-m-d'),
            $reservation->getEndDate()->format('Y-m-d')
        );
        echo $output;
    }
}