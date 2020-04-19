<?php

namespace foysal68\Facebook;

use Illuminate\Support\ServiceProvider;

use foysal68\Facebook\Library\Facebook;

class FacebookServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadRoutesFrom(__DIR__."/routes.php");
        $this->loadViewsFrom(__DIR__."/Views", 'fbp');
        $this->publishes([
            __DIR__.'/Config/facebook.php' => config_path('facebook.php'),
        ]);
    }


    public function boot()
    {
        $this->app->bind('fbm', function($app){
            return new Facebook(config('facebook.fb'));
        });
    }
}
