<?php

namespace Delower186\Twocheckout;

use Illuminate\Support\ServiceProvider;

class TwocheckoutServiceProvider extends ServiceProvider{

    public function boot(){

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','twocheckout');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/twocheckout.php','twocheckout');
        
        $this->publishes([__DIR__ . '/config/twocheckout.php' => config_path('twocheckout.php')],'twocheckout-config');
        $this->publishes([__DIR__. '/views' => resource_path('views/vendor/twocheckout')],'twocheckout-views');
        $this->publishes([__DIR__. '/database/migrations/' => database_path('migrations')],'twocheckout-migrations');
    }

    public function register(){
        
    }
}