<?php

namespace Nfq;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct(\DateTime $startDate, \DateTime $endDate, Guest $guest)
    {
        $this->startDate=$startDate;
        $this->endDate=$endDate;
        $this->guest=$guest;
    }

    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    public function getGuest(): Guest
    {
        return $this->guest;
    }

    public function __toString(): string
    {
        return sprintf('Reserved from %s to %s by %s',
            $this->startDate->format('Y-m-d'),
            $this->endDate->format('Y-m-d'),
            $this->guest
        );
    }
}