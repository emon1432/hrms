<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'organization'])->group(function () {
    Route::get('/organization/dashboard', function () {
        echo 'Organization Dashboard';
    })->name('organization.dashboard');
});
