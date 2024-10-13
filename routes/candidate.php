<?php

use App\Http\Controllers\Frontend\CandidateController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'candidate'])->group(function () {
    Route::controller(CandidateController::class)->group(function () {
        Route::get('/my-dashboard', 'dashboard')->name('candidate.dashboard');
        Route::get('/my-profile', 'profile')->name('candidate.profile');
        Route::post('/my-profile', 'updateProfile')->name('candidate.profile.update');
        Route::get('/my-applied-jobs', 'appliedJobs')->name('candidate.applied-jobs');
    });
});
