<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Auth; 

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
            View::share('Name',"Abdo");
            View::composer('*',function($View){

               $View->with('userData',Auth::user());

            });
    }
}
