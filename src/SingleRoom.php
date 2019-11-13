<?php

namespace Nfq;

class SingleRoom extends Room
{
    public function __construct(int $roomNumber, int $price)
    {
        parent::__construct(
            'Standard',
            true,
            false,
            1,
            $roomNumber,
            $price,
            'TV','Air-conditioner'
        );
    }
}

