<?php

namespace App\Providers;

use GuzzleHttp\Client;
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
        $baseUrl = env('TVMAZE_BASE_URL', 'http://api.tvmaze.com/');

        $this->app->singleton('GuzzleHttp\Client', function($api) use ($baseUrl) {
            return new Client([
                'base_uri' => $baseUrl,
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
