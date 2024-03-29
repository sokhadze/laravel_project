<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function checkPoster() {
        if (\Auth::check() && $this->role === 'poster') {
            return true;
        }
        return false;
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function post_reviews() {
        return $this->hasMany(PostReview::class);
    }
}
