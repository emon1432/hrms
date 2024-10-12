<?php

use App\Http\Controllers\Frontend\CandidateController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'candidate'])->group(function () {
    Route::controller(CandidateController::class)->group(function () {
        Route::get('/my-dashboard', 'dashboard')->name('candidate.dashboard');
    });
});
