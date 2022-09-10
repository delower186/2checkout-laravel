<?php

namespace Delower186\Twocheckout;


use Delower186\Twocheckout\Models\Twocheckout as ModelsTwocheckout;

class Twocheckout{

    public static function loadScript(){
        echo "
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

    public static function buyNow($price){
        echo '<button onclick=checkout('.$price.') type="button" class="'.config('twocheckout.cssClass').'" id="checkout">'.config('twocheckout.text','Checkout').'</button>';
    }

    public static function store($request){
        
        ModelsTwocheckout::create([
            'reference' => $request->refno,
            'price' => $request->total,
            //'currency' => $request->total-currency,
            'signature' => $request->signature,
        ]);
         
    }
}