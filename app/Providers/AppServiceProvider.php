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
    const SUPER_ADMIN = 'super admin';
    const ADMIN = 'admin';
    const USER = 'user';
    const TRADER = 'trader';
    const CUSTOMER = 'customer';
    const CONTENT_MANAGER = 'content manager';


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
