<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        
        view()->composer('*',function($view){
            $view->with('services', \App\Models\Service::orderBy('title','ASC')->get());
            $view->with('products', \App\Models\Product::orderBy('title','ASC')->get());
            $view->with('titles', \App\Models\Titles::first());
        });

        view()->composer(['home.index', 'home.homelayout.services', 'home.homelayout.testimonials', 'home.homelayout.stats'], function($view){
            $view->with('features', \App\Models\Feature::latest()->get());
            $view->with('clients', \App\Models\Client::latest()->get());
            $view->with('stats', \App\Models\Stat::latest()->get());
        });
    }
}
