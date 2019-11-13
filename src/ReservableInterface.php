<?php

namespace Nfq;

interface ReservableInterface
{
    public function addReservation($reservation);

    public function removeReservation($reservation);
}
