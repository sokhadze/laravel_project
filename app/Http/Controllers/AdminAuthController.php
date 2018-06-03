<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin');
    }

    protected function loginIndex() {
        return view('admin.login');
    }

    protected function login(Request $request) {

        $try = \Auth::guard('admin')->attempt([
            'username' => $request->usrname,
            'password' => $request->password
        ]);
        if ($try) {
            return redirect('/admin');
        }
        else {
            return back();
        }
    }
}
