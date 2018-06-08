<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //blacklist
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * Scope a query to only include category post.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePostCategory($query, $category)
    {
        if ($category == null) {
            return;
        }
        return $query->whereHas('categories', function ($query) use ($category) {
            $query->where('category_id', $category);
        });
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
