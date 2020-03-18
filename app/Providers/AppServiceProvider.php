<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MailSendingService;
use App\Bike;
use App\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('PostCard', function($app){

            return new MailSendingService('philippines', '14inc', '14inc');
        });

        // Binding the bike class
        $this->app->singleton('bike', function($app){
            return new Bike;
        });

        //binding the card class
        $this->app->singleton('cart', function($app){
            return new Cart;
        });
    }
}
