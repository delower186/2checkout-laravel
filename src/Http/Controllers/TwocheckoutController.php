<?php

namespace Delower186\Twocheckout\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Delower186\Twocheckout\Facades\Twocheckout;
use Delower186\Twocheckout\Models\Product;

class TwocheckoutController extends Controller
{
    public function index(){
        
        $products = Product::all();
        
        return view('twocheckout::twocheckout',['script' => Twocheckout::loadScript(),'products' => $products ]);
    }


    public function thankYou(Request $request){

        Twocheckout::store($request);

        return view('twocheckout::thankyou',['data' => $request]); 
    }

}
