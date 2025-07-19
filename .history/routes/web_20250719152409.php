<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'John Doe', 'title' => 'About Us']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                    
                'title' => 'My First Blog Post',
                'author' => 'John Doe',
                'body' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'id' => 2,
                'slug' => 'my-second-blog-post',
                'title' => 'My Second Blog Post',
                'author' => 'Jane Doe',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, dolorum debitis nemo quo natus quis excepturi tempora, rerum sint ratione architecto pariatur eum maxime consectetur corporis dolores suscipit delectus laboriosam.',
            ],
        ],
    ]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'my-first-blog-post',
            'title' => 'My First Blog Post',
            'author' => 'John Doe',
            'body' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
        [
            'id' => 2,
            'slug' => 'my-second-blog-post',
            'title' => 'My Second Blog Post',
            'author' => 'Jane Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, dolorum debitis nemo quo natus quis excepturi tempora, rerum sint ratione architecto pariatur eum maxime consectetur corporis dolores suscipit delectus laboriosam.',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});