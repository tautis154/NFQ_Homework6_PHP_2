<?php

namespace Nfq;

class Room implements ReservableInterface
{
    private $roomType;
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $price;
    private $reservations = array();

    public function __construct(string $roomType, bool $hasRestroom, bool $hasBalcony, int $bedCount, int $roomNumber, int $price, string ...$extras)
    {
        $this->roomType=$roomType;
        $this->hasRestroom=$hasRestroom;
        $this->hasBalcony=$hasBalcony;
        $this->bedCount=$bedCount;
        $this->roomNumber=$roomNumber;
        $this->extras=$extras;
        $this->price=$price;

    }

    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    public function addReservation($reservation)
    {
        array_push($this->reservations,$reservation);
    }

    public function removeReservation($reservation)
    {
        unset($this->reservations[array_search($reservation,$this->reservations)]);
    }

    public function __toString()
    {
        return sprintf(
            'Bed Count - %d, Room Type - %s, Room Number - %d, Restroom - %s, Balcony - %s, Extras - %s, Price - %d',
            $this->bedCount,
            $this->roomType,
            $this->getRoomNumber(),
            $this->hasRestroom === true ? 'Has restroom' : 'No restroom',
            $this->hasBalcony === true ? 'Has balcony' : 'No balcony',
            implode(', ', $this->extras),
            $this->price
        );
    }


}