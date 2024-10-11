<?php

use App\Http\Controllers\Organization\DesignationController;
use App\Http\Controllers\Organization\EmployeeController;
use App\Http\Controllers\Organization\JobCategoryController;
use App\Http\Controllers\Organization\JobController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'organization'])->group(function () {
    Route::get('/organization/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('organization.dashboard');

    Route::resource('employees', EmployeeController::class);
    Route::resource('employee-designation', DesignationController::class);
    Route::resource('job-category', JobCategoryController::class);
    Route::resource('job-management', JobController::class);
});
