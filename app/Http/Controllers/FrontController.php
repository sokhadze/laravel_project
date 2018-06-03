<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['postCreate', 'postStore']);
    }

    public function index() {
        return view('index');
    }

    public function posts() {
        return view('posts');
    }

    public function postCreate() {
        return view('post_create');
    }


    public function postStore() {
        return view('post_create');

    }
}
