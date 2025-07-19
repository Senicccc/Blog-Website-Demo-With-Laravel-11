<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'John Doe', 'title' => 'About Us']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'My First Blog Post',
            'author' => 'John Doe',
            'body' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
        [
            'id' => 2,
            'title' => 'My Second Blog Post',
            'author' => 'Jane Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, dolorum debitis nemo quo natus quis excepturi tempora, rerum sint ratione architecto pariatur eum maxime consectetur corporis dolores suscipit delectus laboriosam.',
        ],
    ]]);

    $post = Arr::first();
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        1 => [
            'title' => 'My First Blog Post',
            'author' => 'John Doe',
            'body' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
        2 => [
            'title' => 'My Second Blog Post',
            'author' => 'Jane Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, dolorum debitis nemo quo natus quis excepturi tempora, rerum sint ratione architecto pariatur eum maxime consectetur corporis dolores suscipit delectus laboriosam.',
        ],
    ];
    $post = Arr::first(posts, function(post){
        return $post['id'] === $id
    }
})

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});