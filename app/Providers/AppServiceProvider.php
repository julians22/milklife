<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider.
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        if (env('APP_DEPLOYMENT') == 'cpanel') {
            // set to public_html cpanel
            $public_html = env('APP_DEPLOYMENT_PATH', '/../public_html');
            $this->app->bind('path.public', function () use ($public_html) {
                return base_path().$public_html;
            });
        }
    }
}
