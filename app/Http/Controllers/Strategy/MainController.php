<?php

namespace App\Http\Controllers\Strategy;

use App\Http\Controllers\Controller;
use App\Models\Strategy\ShippingType;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function shippingCalc(Request $request){
        $request->validate([
            'distance' => 'required|numeric',
            'shippingType' => 'required|string',
        ]);

        $shippingOpt = strtoupper($request->shippingType);
        $shippingType = new ShippingType();

        if($shippingType->validate($shippingOpt)){
            $shipping = $shippingType->$shippingOpt();
            $price = $shipping->priceCalc($request->distance);

            return response()->json(array('price' => $price));
        }

        return response()->json('Invalid shipping type', 400);
    }
}
