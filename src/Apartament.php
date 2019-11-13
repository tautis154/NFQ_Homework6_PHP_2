<?php

namespace Nfq;

class Apartament extends Room
{
    public function __construct(int $roomNumber, int $price)
    {
        parent::__construct(
            'Diamond',
            true,
            true,
            4,
            $roomNumber,
            $price,
            'TV','Air-conditioner', 'Refrigerator', 'Kitchen box', 'Mini-bar','Bathtub', 'Free Wi-fi'
        );
    }
}