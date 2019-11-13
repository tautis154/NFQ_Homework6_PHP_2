<?php

namespace Nfq;

class Bedroom extends Room
{
    public function __construct(int $roomNumber, int $price)
    {
        parent::__construct(
            'Gold',
            true,
            true,
            2,
            $roomNumber,
            $price,
            'TV','Air-conditioner','Mini-bar','Bathtub'
        );
    }
}