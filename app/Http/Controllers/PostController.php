<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $records = Post::latest()->get();
        return view('admin.posts.index', compact('records'));
    }

    public function store() {

    }

    public function edit(Post $post) {
        return view('admin.posts.edit', compact('post'));
    }

    public function put(Post $post, Request $request) {
        $post->title = $request->title;
        $post->description = $request->description;
        $post->published = $request->published;
        if ($request->hasFile('image')) {
            $rand_name = str_random(32);
            $ext = \File::extension($request->file('image')->getClientOriginalName());
            $file_name = $rand_name . '.' . $ext;
            $request->file('image')->storeAs('public/images', $file_name);
            $post->image = $file_name;
        }
        $post->save();
        return redirect()->route('admin.posts');
    }

    public function destroy(Post $post) {
        $post->delete();
    }
}
