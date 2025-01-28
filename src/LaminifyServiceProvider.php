<?php

namespace Akufikri\Laminify;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Akufikri\Laminify\View\Components\LaminifyCss;
use Akufikri\Laminify\View\Components\LaminifyJs;

class LaminifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/minify.php', 'minify');
    }

    public function boot()
    {
        // Publishes
        $this->publishes([
            __DIR__ . '/../config/minify.php' => config_path('minify.php'),
        ], 'config');

        // Register Blade Components
        Blade::component('laminify-css', LaminifyCss::class);
        Blade::component('laminify-js', LaminifyJs::class);
    }
}
