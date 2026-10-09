<?php

namespace Froxlor\Example\Providers;

use Froxlor\Core\Support\PackageServiceProvider;

class FroxlorExampleServiceProvider extends PackageServiceProvider
{
    public function boot(): void
    {
        // Everything below is only registered while the package is enabled
        if (!$this->isEnabled()) {
            return;
        }

        // Routes
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }

    public function register(): void
    {
        //
    }
}
