<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'employee'])->group(function () {
    Route::get('/employee/dashboard', function () {
        echo 'Employee Dashboard';
    })->name('employee.dashboard');
});
