<?php

namespace Delower186\Twocheckout\Facades;

use Illuminate\Support\Facades\Facade;

class Twocheckout extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'twocheckout';
    }
}