<?php

namespace App\Models\Strategy\Interfaces;

interface Shipping
{
    public function priceCalc(int $distance) : float;
}
