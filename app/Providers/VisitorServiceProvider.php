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

        // Hitung jumlah total pengunjung
        $totalVisitors = Visitor::count();

        // Hitung jumlah pengunjung untuk hari ini
        $todayVisitors = Visitor::whereDate('visited_date', now()->toDateString())->count();

        // Bagikan data counter ke semua view
        View::share([
            'totalVisitors' => $totalVisitors,
            'todayVisitors' => $todayVisitors,
        ]);
    }
}
