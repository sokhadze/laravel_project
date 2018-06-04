<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function topRated() {
        $apps = self::with('user')->published()
            ->select('posts.*')
            ->leftJoin('post_reviews', 'posts.id', '=', 'post_reviews.post_id')
            ->addSelect(DB::raw('AVG(post_reviews.rating) as average_rating'))
            ->groupBy('posts.id')
            ->orderBy('average_rating', 'desc')->limit(3)->get();
//            ->paginate(session('posts_per_page'));
        return $apps;
    }
}
