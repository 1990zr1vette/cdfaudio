<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.partials.header', 'App\Composers\HeaderComposer');
		view()->composer('layout.partials.footer', 'App\Composers\FooterComposer');
		
		view()->composer('layout.partials.mobileheader', 'App\Composers\MobileHeaderComposer');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}