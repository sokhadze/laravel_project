<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostReview;
use App\Post;

class PostReviewController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['store']);
        $this->middleware('auth:admin')->except(['store']);
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

    public function index()
    {
        $records = PostReview::latest()->get();
        return view('admin.reviews.index', compact('records'));
    }

    public function edit(PostReview $post) {
        return view('admin.reviews.edit', compact('post'));
    }

    public function put(PostReview $post, Request $request) {
        $post->rating = $request->rating;
        $post->review = $request->review;
        $post->save();
        return redirect()->route('admin.reviews');
    }

    public function destroy(PostReview $post) {
        $post->delete();
    }
}
