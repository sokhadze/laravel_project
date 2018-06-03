<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $records = User::latest()->get();
        return view('admin.users.index', compact('records'));
    }

    public function store() {

    }

    public function edit(User $user) {
        return view('admin.users.edit', compact('user'));
    }

    public function put(User $user, Request $request) {
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->lastname = $request->lastname;
        if (!empty($request->birthdate)) {
            $user->birthdate = $request->birthdate;
        }
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->route('admin.users');
    }

    public function destroy(User $user) {
        $user->delete();
    }
}
