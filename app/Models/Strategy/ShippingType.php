<?php

namespace App\Models\Strategy;

use App\Models\Strategy\Interfaces\Shipping;
use App\Models\Strategy\Services\Normal;
use App\Models\Strategy\Services\Sedex;

class ShippingType
{
    private $shippingTypes = [
        'NORMAL',
        'SEDEX'
    ];

    public function validate($shippingType){
        return in_array($shippingType, $this->shippingTypes);
    }

    public function NORMAL() : Shipping {
        return new Normal();
    }

    public function SEDEX() : Shipping {
        return new Sedex();
    }
}
