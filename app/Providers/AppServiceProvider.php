<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    //User's statuses list
    const NOT_VERIFIED = 0;
    const VERIFIED = 1;
    const REMOVED = -1;

    //User's roles list
    const SUPER_ADMIN = -1;
    const ADMIN = 0;
    const USER = 1;
    const TRADER = 2;
    const CUSTOMER = 3;
    const CONTENT_MANAGER = 4;


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
        //
    }
}
