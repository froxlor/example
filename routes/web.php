<?php

use Froxlor\Core\Http\Middleware\EnsureIsInstalled;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', EnsureIsInstalled::class])->group(function () {
    Route::get('example', function () {
        return 'Hello World!';
    });
});
