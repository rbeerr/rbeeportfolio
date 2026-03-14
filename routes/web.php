<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/certificates', 'certificates')->name('certificates');
Route::view('/about-me', 'about')->name('about');
Route::view('/contacts', 'contacts')->name('contacts');