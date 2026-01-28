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
    }
}
