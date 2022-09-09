<?php
Route::group(['namespace' => 'Delower186\Twocheckout\Http\Controllers'],function () {
    
    Route::get('twocheckout','TwocheckoutController@index');

    Route::get('twocheckout/thankyou','TwocheckoutController@thankYou');

});