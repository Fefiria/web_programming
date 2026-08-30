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
        // Paksa semua fungsi asset() menggunakan HTTPS jika berjalan di Vercel/Production
        if (env('APP_ENV') === 'production' || env('VERCEL_ENV')) {
            URL::forceScheme('https');
        }
    }
}
