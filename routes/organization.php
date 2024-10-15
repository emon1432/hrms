<?php

use App\Http\Controllers\Organization\DesignationController;
use App\Http\Controllers\Organization\EmployeeController;
use App\Http\Controllers\Organization\CategoryController;
use App\Http\Controllers\Organization\JobController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'organization'])->group(function () {
    Route::get('/organization/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('organization.dashboard');

    Route::resource('designations', DesignationController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('job', JobController::class);
});
