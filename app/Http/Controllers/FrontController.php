<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['postCreate', 'postStore']);
    }

    public function index() {
        return view('index');
    }

    public function posts() {
        $records = Post::latest()->published()->get();
        return view('posts', compact('records'));
    }

    public function postShow(Post $post) {
        return view('post', compact('post'));
    }

    public function postCreate() {
        return view('post_create');
    }


    public function postStore(Request $request) {
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

        return redirect()->route('posts');

//        return view('post_create');
    }
}
