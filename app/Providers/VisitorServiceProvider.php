<?php

namespace App\Providers;

use App\Models\Visitor;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class VisitorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app['router']->pushMiddlewareToGroup('web', \App\Http\Middleware\TrackVisitors::class);

        View::share(
            'visitorCount',

            Visitor::count()
        );
    }
}
