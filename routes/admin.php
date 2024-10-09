<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('admin.dashboard');
});
