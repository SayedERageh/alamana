<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
})->name('home');


Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/features', function () {
    return view('page.features');
})->name('features');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');