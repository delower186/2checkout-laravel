<?php

namespace Delower186\Twocheckout\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Delower186\Twocheckout\Models\Product;
use Delower186\Twocheckout\Models\Twocheckout as TwocheckoutModel;

class TwocheckoutController extends Controller
{
    public $button;
    public $twoCheckoutScript;

    //'.str_ireplace("|"," ",config('twocheckout.cssClass')).'

    public function __construct(){
        
        $this->button = '<button type="button" class="'.config('twocheckout.cssClass').'" id="checkout">'.config('twocheckout.text','Checkout').'</button>';

        $this->twoCheckoutScript = "
                                    <script src='https://secure.2checkout.com/checkout/client/twoCoInlineCart.js'></script>
                                    <script>
                                        function checkout(price){
                                            TwoCoInlineCart.setup.setMerchant(".config('twocheckout.merchant_code')."); // your merchant code
                                            TwoCoInlineCart.setup.setMode('".config('twocheckout.product_type')."'); // product type
                                            TwoCoInlineCart.register();

                                            TwoCoInlineCart.cart.setCurrency('".config('twocheckout.currency_code')."'); // order currency
                                            TwoCoInlineCart.cart.setReset(true); // erase previous cart sessions

                                            TwoCoInlineCart.products.add({
                                            name        : '".config('twocheckout.cartId')."', //cart id
                                        
                                            price: price //cart total price
                                            });
                                            TwoCoInlineCart.cart.checkout(); //start checkout process
                                        }
                                    </script>
                                ";
    }

    public function index(){
        $products = Product::all();
        return view('twocheckout::twocheckout',['button' => $this->button,'script' => $this->twoCheckoutScript,'products' => $products ]);
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

    public static function buyNow($price){
        echo '<button onclick=checkout('.$price.') type="button" class="'.config('twocheckout.cssClass').'" id="checkout">'.config('twocheckout.text','Checkout').'</button>';
    }
}
