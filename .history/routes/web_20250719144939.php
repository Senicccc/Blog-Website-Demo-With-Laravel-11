<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'John Doe', 'title' => 'About Us']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'My First Blog Post',
            'author' => 'John Doe',
            'body' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
        [
            'title' => 'My Second Blog Post',
            aut
            'body' => 'This is the content of my second blog post.',
        ],
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});