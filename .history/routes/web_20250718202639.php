<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'John Doe']);
});



Route::get('/contact', function () {
    return view('contact');
});