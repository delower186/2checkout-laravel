<?php

namespace Delower186\Twocheckout\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Delower186\Twocheckout\Facades\Twocheckout;
use Delower186\Twocheckout\Models\Product;
use Delower186\Twocheckout\Models\Twocheckout as TwocheckoutModel;

class TwocheckoutController extends Controller
{
    public function index(){
        
        $products = Product::all();
        return view('twocheckout::twocheckout',['script' => Twocheckout::loadScript(),'products' => $products ]);
    }


    public function thankYou(Request $request){

        TwocheckoutModel::create([
            'reference' => $request->refno,
            'price' => $request->total,
            //'currency' => $request->total-currency,
            'signature' => $request->signature,
        ]);

        return view('twocheckout::thankyou',['data' => $request]);
    }

}
