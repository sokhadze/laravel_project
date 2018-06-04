<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostReview;
use App\Post;

class PostReviewController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function store(Request $request, Post $post) {
        $user = auth()->user();
        $post->post_reviews()->create([
            'review' => $request->review,
            'user_id' => $user->id,
            'rating' => $request->rating
        ]);

        return redirect()->back();
    }
}
