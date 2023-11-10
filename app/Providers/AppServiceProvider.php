<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        Password::defaults(function () {

        $rule = Password::min(8)->mixedCase()->numbers()->symbols();

        /** @var \Illuminate\Foundation\Application $app */
        $app = $this->app;
 
        return $app->isProduction()
                    ? $rule->uncompromised()
                    : $rule;
    });
    }
}
