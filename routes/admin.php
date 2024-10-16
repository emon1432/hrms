<?php

use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('admin.dashboard');

    Route::resource('organizations', OrganizationController::class);
    Route::resource('candidates', CandidateController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('admin-profile', ProfileController::class);

});
