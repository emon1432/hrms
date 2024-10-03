<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.pages.home.index');
})->name('home.index');
