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
        return view('admin.users.edit', compact('user'));
    }

    public function put(Post $post, Request $request) {
        $post->name = $request->name;
        $post->role = $request->role;
        $post->email = $request->email;
        $post->lastname = $request->lastname;
        if (!empty($request->birthdate)) {
            $post->birthdate = $request->birthdate;
        }
        if (!empty($request->password)) {
            $post->password = bcrypt($request->password);
        }
        $post->save();
        return redirect()->route('admin.users');
    }

    public function destroy(Post $post) {
        $post->delete();
    }
}
