<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'super-admin'])->group(function () {
    Route::get('/super-admin/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('super-admin.dashboard');
});
