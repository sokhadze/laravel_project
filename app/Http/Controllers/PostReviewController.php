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
        $this->validate($request, [
            'review' => 'required',
            'rating' => 'required|numeric|max:5|min:0'
        ]);
        $user = auth()->user();
        $post->post_reviews()->create([
            'review' => $request->review,
            'user_id' => $user->id,
            'rating' => $request->rating
        ]);

        return redirect()->back()->with('swal', 'Review წარმატებით დაემატა');
    }
}
