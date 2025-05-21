<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Blade::directive('pageTitle', function ($expression) {
            return "<?php \$__env->startPush('title'); ?>{{ {$expression} }}<?php \$__env->stopPush(); ?>";
        });
    }
}
