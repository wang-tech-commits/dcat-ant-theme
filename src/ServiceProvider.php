<?php

namespace MrwangTc\AntTheme;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../resources/dist' => public_path('vendor')], 'ants');
        }
    }
}
