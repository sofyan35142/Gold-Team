<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
=======
use Illuminate\Support\Carbon;
>>>>>>> 39d0754306eb23f1f9cbeaabf30565b1393d30a1
use Illuminate\Support\ServiceProvider;

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
        // config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        // date_default_timezone_set('Asia/Jakarta');
    }
}
