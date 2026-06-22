<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        if (config('app.env') === 'production' && env('VERCEL_URL')) {
            URL::forceRootUrl('https://' . env('VERCEL_URL'));
            URL::useAssetOrigin('https://' . env('VERCEL_URL'));
        } elseif (config('app.env') !== 'production') {
            URL::forceRootUrl(config('app.url'));
            URL::useAssetOrigin(config('app.asset_url'));
        }
    }
}
