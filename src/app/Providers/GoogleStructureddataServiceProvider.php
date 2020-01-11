<?php

namespace SEO\Google\Structured\data\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleStructureddataServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return  void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }
}
