<?php

use App\Http\Controllers\Organization\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'organization'])->group(function () {
    Route::get('/organization/dashboard', function () {
        return view('backend.pages.dashboard.index');
    })->name('organization.dashboard');

    Route::resource('employees', EmployeeController::class);
});
