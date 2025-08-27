<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SocialLink;



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
public function boot()
{
    view()->composer('*', function ($view) {
        $view->with('socialLinks', SocialLink::all());

        // Tambahkan hero
        $view->with('hero', \App\Models\HeroSection::first());
    });
}

}
