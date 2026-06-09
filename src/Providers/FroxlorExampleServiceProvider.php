<?php

namespace Froxlor\Example\Providers;

use Illuminate\Support\ServiceProvider;

class FroxlorExampleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Routes
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }

    public function register(): void
    {
        //
    }
}
