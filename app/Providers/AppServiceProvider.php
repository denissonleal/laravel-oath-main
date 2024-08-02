<?php

namespace App\Providers;

use App\Models\PassportClient;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

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
        //
        Passport::hashClientSecrets();
        Passport::useClientModel(PassportClient::class);
    }
}
