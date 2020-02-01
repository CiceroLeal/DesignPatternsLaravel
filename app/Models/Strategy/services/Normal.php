<?php

namespace App\Models\Strategy\Services;

use App\Models\Strategy\Interfaces\Shipping;

class Normal implements Shipping
{

    public function priceCalc(int $distance): float
    {
        return $distance*1.25 + 10;
    }
}
