<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'super-admin'])->group(function () {
    Route::get('/super-admin/dashboard', function () {
        echo 'Super Admin Dashboard';
    })->name('super-admin.dashboard');
});
