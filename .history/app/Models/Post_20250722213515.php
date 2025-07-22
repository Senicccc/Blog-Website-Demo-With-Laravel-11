<?php 

namespace App\Models;

use Illuminate\Support\Arr;
class Post extends Model
{


    public static function find($slug): array
    {
        $post = Arr::first(static::all(),
        fn ($post) => $post['slug'] == $slug);

        if(!$post) {
            abort(404);
        } 
        
        return $post;
    }
}