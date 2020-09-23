<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Setting;
use View;
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
        //
        View::composer('frontend.inc.footer',function($view){
            $companyInfo=Setting::first();
            $view->with('companyInfo',$companyInfo);
        });
    }
}
