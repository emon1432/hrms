<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'job-seeker'])->group(function () {
    Route::get('/job-seeker/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('job-seeker.dashboard');
});
