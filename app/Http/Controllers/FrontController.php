<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostReview;

class FrontController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['postCreate', 'postStore']);
    }

    public function index() {
        $top_rated = Post::topRated();
        $reviews = PostReview::latest()->limit(10)->get();
        $posts = Post::latest()->published()->limit(3)->get();
        return view('index', compact('reviews', 'posts', 'top_rated'));
    }

    public function posts() {
        $records = Post::latest()->published()->get();
        return view('posts', compact('records'));
    }

    public function postShow(Post $post) {
        return view('post', compact('post'));
    }

    public function postCreate() {
        return view('post_create')->with('swal', 'რეგისტრაცია წარმატებით განხორციელდა.');
    }


    public function postStore(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'profession' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);
        if ($request->hasFile('image')) {
            $rand_name = str_random(32);
            $ext = \File::extension($request->file('image')->getClientOriginalName());
            $file_name = $rand_name . '.' . $ext;
            $request->file('image')->storeAs('public/images', $file_name);
        } else {
            $file_name = null;
        }

        $user = auth()->user();

        $user->posts()->create([
           'title' => $request->title,
           'profession' => $request->profession,
           'image' => $file_name,
            'description' => $request->description
        ]);

        return redirect()->route('posts')->with('swal', 'პოსტი წარმატებით დაემატა, ის გამოჩნდება მოდერაციის გავლის შემდეგ.');
        
    

//        return view('post_create');
    }
}
