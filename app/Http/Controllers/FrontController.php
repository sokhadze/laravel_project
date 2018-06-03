<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('index');
    }

    public function posts() {
        return view('posts');
    }

    public function postCreate() {
        return view('post_create');
    }
}
