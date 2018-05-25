<?php
namespace Goper\Websaper;

use Illuminate\Support\ServiceProvider;

class WebsaperServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('websaper', function () {
            return $this->app->make('Goper\Websaper\Websaper');
        });
    }

    /**
     * Boot
     *
     * @return void
     */
    public function boot()
    {
        // Add resources here...
    }
}
