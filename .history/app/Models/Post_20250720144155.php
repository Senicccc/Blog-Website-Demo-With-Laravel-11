<?php 

namespace App\Models;
class Post 
{
    public static function all()
    {
        return [
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
    }

    public static function find($s)
}