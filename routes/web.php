<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home_page_two');
})->name('home');


Route::get('/about-us', function () {
    return view('about_us');
})->name('about_us');


Route::get('/contact-us', function () {
    return view('contact_us');
})->name('contact_us');


