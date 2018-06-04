<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function logout() {
        \Auth::logout();
        return redirect()->route('auth.login');
    }

    public function registerStore(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
            'birthdate' => 'required',
            'password' => 'required',
            'role' => 'required',
            'email' => 'required:email'
        ]);

        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'role' => $request->role
        ]);
        return redirect()->route('auth.login');
    }

    public function login(Request $request) {
        $try = \Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if ($try) {
            return redirect()->route('index');
        }
        else {
            return back();
        }
    }

    public function loginIndex() {
        return view('login');
    }
}
