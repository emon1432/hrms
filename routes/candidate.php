<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'candidate'])->group(function () {
    Route::get('/candidate/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('candidate.dashboard');
});
