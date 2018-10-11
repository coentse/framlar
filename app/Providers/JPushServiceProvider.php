<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JPush\Client; 

class JPushServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('JPush',function($app){
            return new Client(config('jpush.app_id'),config('jpush.app_secret'), null);
        });
    }
}
