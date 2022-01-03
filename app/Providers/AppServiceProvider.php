<?php

namespace App\Providers;

use App\Models\Site_setting;
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
        view()->composer('front.layouts.master',function ($view){
            $view->with('setting',Site_setting::find(1));
           });
    }
}
