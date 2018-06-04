<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function post_reviews() {
        return $this->hasMany(PostReview::class);
    }

    public function scopePublished($query) {
        return $query->where('published', 1);
    }

    public function avgRating() {
        return round($this->post_reviews()->avg('rating'), 2);
    }
}
