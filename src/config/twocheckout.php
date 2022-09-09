<?php

return [
    /**
     * 2checkout Merchant code
     */
    'merchant_code' => env('MERCHANT_CODE'),

    /**
     * 2checkout product type (only 'DYNAMIC' product type support for now)
     */
    'product_type' => env('PRODUCT_TYPE','DYNAMIC'),

    /**
     * Currency type
     */
    'currency_code' => env('CURRENCY_CODE','USD'),

    /**
     * css classes separated by space
     */
    'cssClass' => env('CSS_CLASSES','text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'),

    /**
     * Pay/checkout button text
     */
    'text' => env('BUTTON_TEXT','Buy Now'),

    /**
     * Cart Id
     */
    'cartId' => env('CART_NAME','Total Price')
];