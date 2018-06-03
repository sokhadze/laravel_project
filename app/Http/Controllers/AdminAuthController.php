<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin')->except(['logout']);
    }

    protected function loginIndex() {
        return view('admin.login');
    }

    protected function login(Request $request) {
//        dd($request->toArray());

        $try = \Auth::guard('admin')->attempt([
            'username' => $request->username,
            'password' => $request->password
        ]);
        if ($try) {
            return redirect()->route('admin.index');
        }
        else {
            return back();
        }
    }

    protected function logout() {
        \Auth::guard('admin')->logout();
        return redirect()->route('admin.login.index');
    }
}
