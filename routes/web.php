<?php

use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\OthersController;
use Illuminate\Support\Facades\Route;

Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/contact', 'contact')->name('contact.index');
    Route::get('/categories', 'categories')->name('categories.index');
    Route::get('/companies', 'companies')->name('companies.index');
    Route::get('/companies/{slug}', 'company')->name('companies.show');
    Route::get('/jobs', 'jobs')->name('jobs.index');
    Route::get('/jobs/{slug}', 'job')->name('jobs.show');
    Route::get('/blogs', 'blogs')->name('blogs.index');
    Route::get('/blogs/{slug}', 'blog')->name('blogs.show');
});

Route::controller(OthersController::class)->group(function () {
    Route::get('/migrate', 'migrate')->name('migration');
    Route::get('/clear', 'clear')->name('clear');
    Route::get('/composer', 'composer')->name('composer');
    Route::get('/iseed', 'iseed')->name('iseed');
});
