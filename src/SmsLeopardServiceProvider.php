<?php

namespace rkmaxwell\smsleopard;

use Illuminate\Support\ServiceProvider;
use rkmaxwell\smsleopard\Services\SmsLeopardClient;

class SmsLeopardServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/smsleopard.php', 'smsleopard');

        $this->app->singleton(SmsLeopardClient::class, function () {
            return new SmsLeopardClient(
                config('smsleopard.api_key'),
                config('smsleopard.api_secret'),
                config('smsleopard.source')
            );
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/smsleopard.php' => config_path('smsleopard.php'),
        ], 'config');
    }
}
