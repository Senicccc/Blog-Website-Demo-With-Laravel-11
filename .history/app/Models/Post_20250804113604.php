<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author_id', 'category_id', 'slug', 'body'];

    protected $with = ['author', 'category'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        if(isset($filters['search']) ? $filters['search'] : false) {
            $query->where('title', 'like', '%' . request['search'] . '%');
        }
        $query->where('title', 'like', '%' . request('search') . '%');
    }

}