<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class Post extends Model
{
    protected $fillable = ['title', 'author', 'slug', 'body'];];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getExcerptAttribute()
    {
        return Str::limit($this->content, 100);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}