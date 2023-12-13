<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/team', 'team')->name('team');
Route::view('/testimonials', 'testimonials')->name('testimonials');
Route::view('/faq', 'faq')->name('faq');
