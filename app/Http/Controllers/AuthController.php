<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function registerStore(Request $request) {
        User::create($request->all());
        return redirect('/');
    }
}
